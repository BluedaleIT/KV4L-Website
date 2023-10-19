var prevpagetoken = "";
var prevpagetokenarray = [];
var prevpageelement;
var nextpagetoken = "";
var nextpageelement;
var nextPageToken2;
var paginationnum = 1;
var newtoken;
initblog();

function escapeHtml(text) {
  var map = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&#039;",
  };

  return text.replace(/[&<>"']/g, function (m) {
    return map[m];
  });
}

function strip_tags(input, allowed) {
  allowed = (
    ((allowed || "") + "").toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []
  ).join(""); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
  var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
    commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
  return input.replace(commentsAndPhpTags, "").replace(tags, function ($0, $1) {
    return allowed.indexOf("<" + $1.toLowerCase() + ">") > -1 ? $0 : "";
  });
}

function limit(string = "", limit = 0) {
  return string.substring(0, limit);
}

function getBlogView(postid) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // console.log(this.responseText);
      var viewshtml = document.getElementById("postidview-" + postid);
      if (this.responseText == 0) {
        viewshtml.innerHTML = "";
      } else {
        viewshtml.innerHTML =
          '<i class="bi bi-bar-chart-fill"></i>' + this.responseText;
        // var eachviews2 = this.responseText;
      }
    }
  };
  xmlhttp.open("GET", "admin/functions.php?postidviews=" + postid, true);
  xmlhttp.send();
}

function blogpost() {
  const xhttp = new XMLHttpRequest();
  var labels = [];
  var tags = document.querySelectorAll("#tags");

  tags.forEach((tag) => {
    labels.push(tag.innerHTML);
  });
  console.log(labels);
  xhttp.open(
    "GET",
    "https://www.googleapis.com/blogger/v3/blogs/1464605343715337973/posts?key=AIzaSyC7NA9vDhkVtk4lWisJxGW--fYXLIeM__w&fetchImages=true&maxResults=5&labels=" +
    labels,
    true
  );

  xhttp.onload = function () {
    var data = JSON.parse(this.responseText);
    if (data.length !== 0) {
      nextpagetoken = data.nextPageToken;

      for (var i = 0; i < data.items.length; i++) {
        var date = new Date(data.items[i].published);

        var day = date.getDate();
        var year = date.getFullYear();
        const months = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ];
        var longmonth = months[date.getMonth()];
        // var content = data.items[i].content;
        var content2 = strip_tags(data.items[i].content, "<p>");

        // const greeting = limit('Hello Marcus', 6)
        // var content3 = limit(content2, 120);
        // console.log(data);

        const blogposthtml = document.getElementById("postlist");
        var html =
          '<div class="col-lg-6">' +
          '  <article class="d-flex flex-column">' +
          '    <div class="post-img text-center">' +
          '      <img src="' +
          data.items[i].images[0].url +
          '" alt="" class="img-fluid " loading="lazy">' +
          "    </div>" +
          '    <h2 class="title">' +
          '      <a href="blog-details.php?postid=' +
          data.items[i].id +
          '">' +
          data.items[i].title +
          "        </a>" +
          "    </h2>" +
          '    <div class="meta-top">' +
          "      <ul>" +
          '        <li class="d-flex align-items-center"><i class="bi bi-clock"></i>' +
          day +
          " " +
          longmonth +
          ", " +
          year +
          "</li>" +
          "      </ul>" +
          "    </div>" +
          '    <div class="content" id="content' +
          i +
          '">' +
          "" +
          "........</div><br/>" +
          '    <div class="read-more mt-auto align-self-end">' +
          '      <a href="blog-details.php?postid=' +
          data.items[i].id +
          '">Read More</a>' +
          "    </div>" +
          "  </article>" +
          "</div>";

        blogposthtml.insertAdjacentHTML("beforeend", html);
        // console.log(i);
        // console.log(escapeHtml(data.items[i].content));
        document.getElementById("content" + i).innerHTML =
          data.items[i].content;

        const divremove = document.querySelectorAll(".separator");
        divremove.forEach((div) => {
          div.remove();
        });

        var string = document.getElementById("content" + i).innerHTML;

        var stripped = strip_tags(string, "<p>");
        var str = stripped.split("<p>​</p>").join("");
        console.log(str);

        document.getElementById("content" + i).innerHTML = limit(str, 350);
      }

      var prevpageelement = document.getElementById("prev");
      var nextpageelement = document.getElementById("next");

      prevpageelement.style.display = "none";
      nextpageelement.style.display = "block";

      prevpagetokenarray.push("");
    }
  };
  xhttp.send();
}

function activebutton(tage) {
  const divremove = document.querySelectorAll("#tags-act");
  divremove.forEach((div) => {
    div.id = "tags";
    div.style.border = "1px solid rgba(var(--color-secondary-light-rgb), 0.8)";
  });
  if (tage.id == "tags") {
    tage.id = "tags-act";
    tage.style.border = "1px solid var(--color-primary)";
    // tage.classList.toggle="test-toggle";
  }
  // document.getElementById("exampleModal").modal("hide");
  $("#exampleModal").modal("hide");
  console.log("done");
  initblog();
}
// function activebutton2(tage) {
//   const divremove = document.querySelectorAll("#tags-act");
//   divremove.forEach((div) => {
//     div.id = "tags";
//     // div.style.border = "1px solid rgba(var(--color-secondary-light-rgb), 0.8)";
//   });
//   if (tage.id == "tags") {
//     tage.id = "tags-act";
//     // tage.style.border = "1px solid var(--color-primary)";
//     // tage.classList.toggle="test-toggle";
//   }
//   // document.getElementById("exampleModal").modal("hide");
//   console.log("done");
//   initblog();
// }

function gettags() {
  const xhttp = new XMLHttpRequest();

  var string =
    "https://www.googleapis.com/blogger/v3/blogs/1464605343715337973/posts?key=AIzaSyC7NA9vDhkVtk4lWisJxGW--fYXLIeM__w&maxResults=500";

  xhttp.open("GET", string, true);
  // console.log(labels);
  xhttp.onload = function () {
    var data = JSON.parse(this.responseText);
    if (data.length !== 0) {
      var testlabes = [];

      const taghtml = document.getElementById("tagdiv");
      const taghtml2 = document.getElementById("tagdiv2");

      for (var i = 0; i < data.items.length; i++) {
        if (data.items[i].labels) {
          // console.log(data.items[i].labels);
          const labelstest = data.items[i].labels;

          labelstest.forEach((div) => {
            testlabes.push(div);
          });
        }
      }
      var elementtagadd;
      var elementtagadd2;

      var testlabes2 = [...new Set(testlabes)];
      testlabes2.forEach((div2) => {
        // testlabes2.push(div);
        elementtagadd =
          '<li><a  href="#" id="tags" onclick="activebutton(this)" role="button">' +
          div2 +
          "</a></li>";
        elementtagadd2 =
          '<a href="#" class="btn btn-primary mx-1 my-1" id="tags" onclick="activebutton(this)"  >' +
          div2 +
          "</a>";
        taghtml.insertAdjacentHTML("beforeend", elementtagadd);
        taghtml2.insertAdjacentHTML("beforeend", elementtagadd2);
      });

      var tagspinner = document.getElementById("tagspinner");
      tagspinner.classList.add("d-none");
      // var elementtagadd = '<li><a id="tags" onclick="activebutton(this)" role="button">'+ + '</a></li>'  ;

      console.log(testlabes2);
    }
  };
  xhttp.send();
}

function initblog() {
  const xhttp = new XMLHttpRequest();
  var string =
    "https://www.googleapis.com/blogger/v3/blogs/1464605343715337973/posts?key=AIzaSyC7NA9vDhkVtk4lWisJxGW--fYXLIeM__w&fetchImages=true&maxResults=3";

  if (nextpagetoken) {
    console.log(nextpagetoken);
    var tokenfind = "&pageToken=" + nextpagetoken;

    string = string + tokenfind;
  } else {
    // console.log("no");
  }

  var labels = [];
  var tags = document.querySelectorAll("#tags-act");
  if (typeof tags != "undefined" && tags != null) {
    tags.forEach((tag) => {
      labels.push(tag.innerHTML);
    });
    // console.log(labels);
    var labelsfind = "&labels=" + labels + ",";
    // console.log(labelsfind);
    if (labels) {
      string = string + labelsfind;
    }
    paginationnum = 1;
  }
  // console.log(string);
  xhttp.open("GET", string, true);

  xhttp.onload = function () {
    var data = JSON.parse(this.responseText);
    if (data.length !== 0) {
      nextpagetoken = data.nextPageToken;
      const blogposthtml = document.getElementById("postlist");

      blogposthtml.innerHTML = "";

      for (var i = 0; i < data.items.length; i++) {
        var date = new Date(data.items[i].published);

        var day = date.getDate();
        var year = date.getFullYear();
        const months = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ];
        var longmonth = months[date.getMonth()];
        // var content = data.items[i].content;
        var content2 = strip_tags(data.items[i].content, "<p>");

        // const greeting = limit('Hello Marcus', 6)
        // var content3 = limit(content2, 120);
        // console.log(data);

        var html2 =
          '<div class="col-lg-6">' +
          '  <article class="d-flex flex-column">' +
          '    <div class="post-img text-center">' +
          '      <img src="' +
          data.items[i].images[0].url +
          '" alt="" class="img-fluid " loading="lazy">' +
          "    </div>" +
          '    <h2 class="title">' +
          '      <a href="blog-details.php?postid=' +
          data.items[i].id +
          '">' +
          data.items[i].title +
          "        </a>" +
          "    </h2>" +
          '    <div class="meta-top">' +
          "      <ul>" +
          '        <li class="d-flex align-items-center"><i class="bi bi-clock"></i>' +
          day +
          " " +
          longmonth +
          " " +
          year +
          "</li>" +
          '<li class="d-flex align-items-center" id="postidview-' +
          data.items[i].id +
          '"></li>' +
          "      </ul>" +
          "    </div>" +
          '    <div class="content" id="content' +
          i +
          '">' +
          "" +
          "........</div><br/>" +
          '    <div class="read-more mt-auto align-self-end">' +
          '      <a href="blog-details.php?postid=' +
          data.items[i].id +
          '">Read More</a>' +
          "    </div>" +
          "  </article>" +
          "</div>";

        var html =
          "" +
          '           <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">' +
          '              <div class="post-box">' +
          '                <div class="post-img"><img src="' +
          data.items[i].images[0].url +
          '" class="" alt="" loading="lazy"></div>' +
          '                <div class="meta">' +
          '                  <span class="post-date">' +
          day +
          " " +
          longmonth +
          " " +
          year +
          "</span>" +
          "                  " +
          "                </div>" +
          '                <h3 class="post-title">' +
          data.items[i].title +
          "</h3>" +
          "                <p id='content" +
          i +
          "'></p>" +
          '                <a href="blog-details.php?postid=' +
          data.items[i].id +
          '" class="readmore stretched-link mb-5"><span>Read More</span><i' +
          '                    class="bi bi-arrow-right"></i></a>' +
          "              </div>" +
          "            </div> <br>" +
          "";
        blogposthtml.insertAdjacentHTML("beforeend", html);
        // console.log(i);
        // console.log(escapeHtml(data.items[i].content));
        document.getElementById("content" + i).innerHTML =
          data.items[i].content;

        const divremove = document.querySelectorAll(".separator");
        divremove.forEach((div) => {
          div.remove();
        });

        var string = document.getElementById("content" + i).innerHTML;

        var stripped = strip_tags(string, "<p>");
        var str = stripped.split("<p></p>").join("");
        // console.log(str);

        document.getElementById("content" + i).innerHTML =
          limit(str, 250) + ".....";

        // console.log(eachviews2);
      }
    }
  };
  xhttp.send();
}

function nextpageblog2() {
  initblog();

  var prevpageelement = document.getElementById("prev");
  var nextpageelement = document.getElementById("next");

  paginationnum = paginationnum + 1;

  prevpagetoken = nextpagetoken;
  prevpagetokenarray.push(prevpagetoken);
  nextpagetoken = nextPageToken2;

  prevpageelement.style.display = "block";
  nextpageelement.style.display = "block";
  document.getElementById("pagination").innerHTML = paginationnum;

  console.log(prevpagetokenarray);
}
function prevpageblog2() {
  prevpagetokenarray.splice(-1);

  var prevpageelement = document.getElementById("prev");
  var nextpageelement = document.getElementById("next");
  paginationnum = paginationnum - 1;

  if (paginationnum == 1) {
    prevpageelement.style.display = "none";
    nextpageelement.style.display = "block";
  } else {
    prevpageelement.style.display = "block";
    nextpageelement.style.display = "block";
  }

  nextpagetoken = prevpagetokenarray[prevpagetokenarray.length - 1];
  document.getElementById("pagination").innerHTML = paginationnum;

  initblog();
}

function recentpost() {
  const xhttp = new XMLHttpRequest();
  var string =
    "https://www.googleapis.com/blogger/v3/blogs/1464605343715337973/posts?key=AIzaSyC7NA9vDhkVtk4lWisJxGW--fYXLIeM__w&fetchImages=true&maxResults=5";

  xhttp.open("GET", string, true);

  xhttp.onload = function () {
    var data = JSON.parse(this.responseText);
    if (data.length !== 0) {
      nextpagetoken = data.nextPageToken;
      const recenthtml = document.getElementById("recentpost");

      recenthtml.innerHTML = "";

      for (var i = 0; i < data.items.length; i++) {
        var date = new Date(data.items[i].published);

        var day = date.getDate();
        var year = date.getFullYear();
        const months = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ];
        var longmonth = months[date.getMonth()];

        var html =
          ' <div class="post-item mt-3">' +
          '                    <img src="' +
          data.items[i].images[0].url +
          '" alt="" class="flex-shrink-0" loading="lazy">' +
          "                    <div>" +
          '                      <h4><a href="blog-details.php?postid=' +
          data.items[i].id +
          '">' +
          limit(data.items[i].title, 30) +
          "...</a></h4>" +
          "                      <time >" +
          day +
          " " +
          longmonth +
          " " +
          year +
          "</time>" +
          "                    </div>" +
          "                  </div>";

        recenthtml.insertAdjacentHTML("beforeend", html);
      }
    }
  };
  xhttp.send();
}

// function nextpageblog() {
//   const xhttp = new XMLHttpRequest();
//   var stringget =
//     "https://www.googleapis.com/blogger/v3/blogs/1464605343715337973/posts?key=AIzaSyC7NA9vDhkVtk4lWisJxGW--fYXLIeM__w&fetchImages=true&maxResults=5&pageToken=" +
//     nextpagetoken;
//   xhttp.open("GET", stringget, true);

//   xhttp.onload = function () {
//     var data = JSON.parse(this.responseText);

//     if (data.length !== 0) {
//       const blogposthtml = document.getElementById("postlist");
//       blogposthtml.innerHTML = "";
//       for (var i = 0; i < data.items.length; i++) {
//         var date = new Date(data.items[i].published);

//         var day = date.getDate();
//         var year = date.getFullYear();
//         const months = [
//           "January",
//           "February",
//           "March",
//           "April",
//           "May",
//           "June",
//           "July",
//           "August",
//           "September",
//           "October",
//           "November",
//           "December",
//         ];
//         var longmonth = months[date.getMonth()];
//         // var content = data.items[i].content;
//         var content2 = strip_tags(data.items[i].content, "<p>");

//         // const greeting = limit('Hello Marcus', 6)
//         var content3 = limit(content2, 120);
//         // console.log(data);

//         var html =
//           '<div class="col-lg-6">' +
//           '  <article class="d-flex flex-column">' +
//           '    <div class="post-img text-center">' +
//           '      <img src="' +
//           data.items[i].images[0].url +
//           '" alt="" class="img-fluid " loading="lazy">' +
//           "    </div>" +
//           '    <h2 class="title">' +
//           '      <a href="blog-details.php?postid=' +
//           data.items[i].id +
//           '">' +
//           data.items[i].title +
//           "        </a>" +
//           "    </h2>" +
//           '    <div class="meta-top">' +
//           "      <ul>" +
//           '        <li class="d-flex align-items-center"><i class="bi bi-clock"></i>' +
//           day +
//           " " +
//           longmonth +
//           ", " +
//           year +
//           "</li>" +
//           "      </ul>" +
//           "    </div>" +
//           '    <div class="content" id="content' +
//           i +
//           '">' +
//           "" +
//           "........</div><br/>" +
//           '    <div class="read-more mt-auto align-self-end">' +
//           '      <a href="blog-details.php?postid=' +
//           data.items[i].id +
//           '">Read More</a>' +
//           "    </div>" +
//           "  </article>" +
//           "</div>";

//         blogposthtml.insertAdjacentHTML("beforeend", html);
//         document.getElementById("content" + i).innerHTML =
//           data.items[i].content;

//         const divremove = document.querySelectorAll(".separator");
//         divremove.forEach((div) => {
//           div.remove();
//         });

//         var string = document.getElementById("content" + i).innerHTML;

//         var stripped = strip_tags(string, "<p>");
//         var str = stripped.split("<p>​</p>").join("");
//         console.log(str);

//         document.getElementById("content" + i).innerHTML = limit(str, 350);
//       }
//       var prevpageelement = document.getElementById("prev");
//       var nextpageelement = document.getElementById("next");

//       paginationnum = paginationnum + 1;

//       document.getElementById("pagination").innerHTML = paginationnum;

//       prevpagetoken = nextpagetoken;
//       prevpagetokenarray.push(prevpagetoken);
//       nextpagetoken = data.nextPageToken;

//       prevpageelement.style.display = "block";
//       nextpageelement.style.display = "block";
//     }
//   };
//   xhttp.send();
// }

// function prevpageblog() {
//   const xhttp = new XMLHttpRequest();
//   prevpagetokenarray.splice(-1);

//   if (prevpagetokenarray[prevpagetokenarray.length - 1] != "") {
//     var stringget =
//       "https://www.googleapis.com/blogger/v3/blogs/1464605343715337973/posts?key=AIzaSyC7NA9vDhkVtk4lWisJxGW--fYXLIeM__w&fetchImages=true&maxResults=5&pageToken=" +
//       prevpagetokenarray[prevpagetokenarray.length - 1];
//   } else {
//     var stringget =
//       "https://www.googleapis.com/blogger/v3/blogs/1464605343715337973/posts?key=AIzaSyC7NA9vDhkVtk4lWisJxGW--fYXLIeM__w&fetchImages=true&maxResults=5";
//   }
//   console.log(stringget);
//   xhttp.open("GET", stringget, true);

//   xhttp.onload = function () {
//     var data = JSON.parse(this.responseText);
//     if (data.length !== 0) {
//       const blogposthtml = document.getElementById("postlist");
//       blogposthtml.innerHTML = "";
//       for (var i = 0; i < data.items.length; i++) {
//         console.log(i);

//         var date = new Date(data.items[i].published);

//         var day = date.getDate();
//         var year = date.getFullYear();
//         const months = [
//           "January",
//           "February",
//           "March",
//           "April",
//           "May",
//           "June",
//           "July",
//           "August",
//           "September",
//           "October",
//           "November",
//           "December",
//         ];
//         var longmonth = months[date.getMonth()];
//         // var content = data.items[i].content;
//         var content2 = strip_tags(data.items[i].content, "<p>");

//         // const greeting = limit('Hello Marcus', 6)
//         var content3 = limit(content2, 120);
//         // console.log(data);

//         var html =
//           '<div class="col-lg-6">' +
//           '  <article class="d-flex flex-column">' +
//           '    <div class="post-img text-center">' +
//           '      <img src="' +
//           data.items[i].images[0].url +
//           '" alt="" class="img-fluid " loading="lazy">' +
//           "    </div>" +
//           '    <h2 class="title">' +
//           '      <a href="blog-details.php?postid=' +
//           data.items[i].id +
//           '">' +
//           data.items[i].title +
//           "        </a>" +
//           "    </h2>" +
//           '    <div class="meta-top">' +
//           "      <ul>" +
//           '        <li class="d-flex align-items-center"><i class="bi bi-clock"></i>' +
//           day +
//           " " +
//           longmonth +
//           ", " +
//           year +
//           "</li>" +
//           "      </ul>" +
//           "    </div>" +
//           '    <div class="content" id="content' +
//           i +
//           '">' +
//           "" +
//           "........</div><br/>" +
//           '    <div class="read-more mt-auto align-self-end">' +
//           '      <a href="blog-details.php?postid=' +
//           data.items[i].id +
//           '">Read More</a>' +
//           "    </div>" +
//           "  </article>" +
//           "</div>";

//         blogposthtml.insertAdjacentHTML("beforeend", html);
//         document.getElementById("content" + i).innerHTML =
//           data.items[i].content;

//         const divremove = document.querySelectorAll(".separator");
//         divremove.forEach((div) => {
//           div.remove();
//         });

//         var string = document.getElementById("content" + i).innerHTML;

//         var stripped = strip_tags(string, "<p>");
//         var str = stripped.split("<p>​</p>").join("");
//         console.log(str);

//         document.getElementById("content" + i).innerHTML = limit(str, 350);
//       }
//       var prevpageelement = document.getElementById("prev");
//       var nextpageelement = document.getElementById("next");
//       paginationnum = paginationnum - 1;

//       document.getElementById("pagination").innerHTML = paginationnum;
//       if (paginationnum == 1) {
//         prevpageelement.style.display = "none";
//         nextpageelement.style.display = "block";
//       } else {
//         prevpageelement.style.display = "block";
//         nextpageelement.style.display = "block";
//       }

//       nextpagetoken = data.nextPageToken;
//     }
//   };
//   xhttp.send();
// }
