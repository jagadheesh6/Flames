
var input1= document.getElementById("in1");
var input2= document.getElementById("in2");

var button= document.getElementById("btn");


button.addEventListener("click", function () {
  var name1= input1.value;
  var name2 = input2.value;
   name1 = name1.replace(/\s/g, '');
   name2 = name2.replace(/\s/g, '');
   name1 = name1.toLowerCase();
    name2 = name2.toLowerCase();
    name1 = name1.split("");
    name2 = name2.split("");
   for (a = 0; a < 26; a++) {
       for (var i = 0; i < name1.length; i++) {
           for (var j = 0; j < name2.length; j++) {
               if (name1[i] == name2[j]) {
                   name1.splice(i, 1);

                   name2.splice(j, 1);
               }
           }
       }
   }

   var tot_len = name1.length + name2.length;

   var flames = ["Friend", "Lover", "Affection", "Marriage", "Enemy", "Sister"];
   if (tot_len == 3 || tot_len == 5 || tot_len == 14 || tot_len == 16 || tot_len == 18) {
       var final = flames[0];
   } else if (tot_len == 10 || tot_len == 19) {
       var final = flames[1];
   } else if (tot_len == 8 || tot_len == 12 || tot_len == 13 || tot_len == 17) {
       var final = flames[2];
   } else if (tot_len == 6 || tot_len == 11 || tot_len == 15) {
       var final = flames[3];
   } else if (tot_len == 2 || tot_len == 4 || tot_len == 7 || tot_len == 9 || tot_len == 20) {
       var final = flames[4];
   } else if (tot_len == 1) {
       var final = flames[5];
   } else {
       console.log("wrong");
   }
   if(final!=null){
    window.alert(final);
}else{
    window.alert("Invalid Name Match Found!");
}
});








