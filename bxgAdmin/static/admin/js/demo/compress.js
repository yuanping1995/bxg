function photoCompress(file,w,objDiv){
    var ready=new FileReader();
/*开始读取指定的Blob对象或File对象中的内容. 当读取操作完成时,readyState属性的值会成为DONE,如果设置了onloadend事件处理程序,则调用之.同时,result属性中将包含一个data: URL格式的字符串以表示所读取文件的内容.*/
    ready.readAsDataURL(file);
    ready.onload=function(){
    	var re=this.result;
        canvasDataURL(re,w,objDiv);
    }
}
function canvasDataURL(re,w,objDiv){
    var newImg=new Image();
    newImg.src=re;
    var imgWidth,imgHeight,offsetX=0,offsetY=0;
    newImg.onload=function(){
        var img=document.createElement("img");
        img.src=newImg.src;
        imgWidth=img.width;
        imgHeight=img.height;
        var canvas=document.createElement("canvas");
        canvas.width=w;
        canvas.height=w;
        var ctx=canvas.getContext("2d");
        ctx.clearRect(0,0,w,w);
        if(imgWidth>imgHeight){
            imgWidth=w*imgWidth/imgHeight;
            imgHeight=w;
            offsetX=-Math.round((imgWidth-w)/2);
        }else{
            imgHeight=w*imgHeight/imgWidth;
            imgWidth=w;
            offsetY=-Math.round((imgHeight-w)/2);
        }
        ctx.drawImage(img,offsetX,offsetY,imgWidth,imgHeight);
        var base64=canvas.toDataURL("image/jpeg",1);
        var imageSrc = document.createElement('img');
        imageSrc.setAttribute('src',base64);
    
         //图片地址传给后台
        console.log(base64);
        if(typeof objDiv == "object"){
            objDiv.appendChild(imageSrc);	
//          objDiv.appendChild(canvas);
        }else if(typeof objDiv=="function"){
            objDiv(base64);
        }
    }
}