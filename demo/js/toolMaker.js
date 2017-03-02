
function generateTool(imgSrc,width,winWidth,height,winHeight,border,hrefLink,caption,text) {
 
day = new Date();
id = day.getTime();
document.write('<a href= javascript:popup("' + hrefLink + '",' + winWidth +',' + winHeight + ')>' +'<img src="' + imgSrc + '"' + 'alt=' + caption + ' width= ' + width + ' height=' + height + ' border=' + border + '</img></a>');
document.write('')
}
