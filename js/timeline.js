!function(m){m.fn.timeline=function(){var a={id:m(this),item:m(this).find(".timeline-item"),activeClass:"timeline-item--active",img:".timeline__img"};a.item.eq(0).addClass(a.activeClass),a.id.css("background-image","url("+a.item.first().find(a.img).attr("src")+")");var l=a.item.length;m(window).scroll(function(){var t,s,e=m(this).scrollTop();a.item.each(function(i){s=m(this).offset().top,t=m(this).height()+m(this).offset().top;m(this);i==l-2&&e>s+m(this).height()/2?(a.item.removeClass(a.activeClass),a.id.css("background-image","url("+a.item.last().find(a.img).attr("src")+")"),a.item.last().addClass(a.activeClass)):e<=t-40&&s<=e&&(a.id.css("background-image","url("+m(this).find(a.img).attr("src")+")"),a.item.removeClass(a.activeClass),m(this).addClass(a.activeClass))})})}}(jQuery),$("#timeline-1").timeline();