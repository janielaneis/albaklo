<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <title>Thank you for your order!</title>
      <link rel="icon" href="./image/favicon.svg">
      <style>
         p {
         font-size: 14pt; /* Размер шрифта в пунктах */ }
      </style>
   </head>
   <body>
      <br>
      <br>
      <center>
         <img src="" id="rand_img" style="width: 150px" />
         <script type="text/javascript">
            function randomInteger(min, max) {
                var rand = min + Math.random() * (max - min)
                rand = Math.round(rand);
                return rand;
               }
               var day=randomInteger(1240, 4350);
               document.getElementById("rand_img").src = "https://avatars.dicebear.com/api/jdenticon/" + day + ".svg";
         </script>
         <br>
         <br>
         <h1>Thank you, your order has been accepted!</h1>
         <p>Our manager will contact you shortly to clarify the order.</p>
         <p>
            Your order number № 
            <script type="text/javascript">
               function randomInteger(min, max) {
                var rand = min + Math.random() * (max - min)
                rand = Math.round(rand);
                return rand;
               }
               var day=randomInteger(1240, 4350);
               document.write(day);
            </script>
         </p>
         <p>Please include your contact phone number.</p>
         <br><br>
         <p class="fail">If you made a mistake when filling out the form, then please <a href="index.html">fill out the application again</a></p>
      </center>
      <script src="scripts/jquery.min.js"></script>
      <script>
         var params = window
         .location
         .search
         .replace('?','')
         .split('&')
         .reduce(
             function(p,e){
                 var a = e.split('=');
                 p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                 return p;
             },
             {}
             );
         
         var get_params = "";
         var amp = '&'; 
         for (var key in params) {
                 // этот код будет вызван для каждого свойства объекта
                 // ..и выведет имя свойства и его значение
                 get_params = get_params + key + '=' + params[key] + amp;
                 // console.log( "Ключ: " + key + " значение: " + params[key] );
             }
             
             var  get_url  = '?'+ get_params.slice(0, -1);
             console.log( get_url);
             
             if(get_url !== '?=undefined'){
                 $("a[href]").attr('href', function() {
                     
                     if (this.hash ) {
                      if(this.hash == '#models') return '../index.php'+get_url+'#models';
                           // document.write("Совпадение найдено")
                           return this.hash;
                       } else {
                           // document.write("Совпадение не найдено")
                           return this.href+get_url;
                       }
                       
                       
                   });
                 
             }
             
      </script>
   </body>
</html>