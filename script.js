var d = new Date();

//var year = d.getFullYear();//2018

var totalyears=[2017,2018,2019];//0-2

var cyear=totalyears.indexOf(year);//1

function previousyear(year)
{
  year -= 1;
  console.log("yr:"+year);

  $(document).ready(function() { /// Wait till page is loaded
    $("#calendar-dates0").load(location.href + " #calendar-dates1");
  });

  // for(let x=0;x<12;x++)
  // {
  //   calen(x,year);
  // }
  //calen(month,year);
}
function nextyear()
{
  year=year+1;
}

function calen(month,year){


var month_name = ['January','February','March','April','May','June','July','August','September','October','November','December'];
     //0-11


var first_date = month_name[month] + " " + 1 + " " +year;
    //January 1 2018

var tmp = new Date(first_date).toDateString();
    //Mon jan 01 2018 ...

var first_day = tmp.substring(0, 3);    //Mon

var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];

var day_no = day_name.indexOf(first_day);   //1

var days = new Date(year, month+1, 0).getDate();    //31
    //Wed jan 30 2018 ...

var calendar = get_calendar(day_no, days);

document.getElementById("calendar-dates0").appendChild(calendar);
document.getElementById("calendar-dates1").appendChild(calendar);
document.getElementById("calendar-dates2").appendChild(calendar);
document.getElementById("calendar-dates3").appendChild(calendar);
document.getElementById("calendar-dates4").appendChild(calendar);
document.getElementById("calendar-dates5").appendChild(calendar);
document.getElementById("calendar-dates6").appendChild(calendar);
document.getElementById("calendar-dates7").appendChild(calendar);
document.getElementById("calendar-dates8").appendChild(calendar);
document.getElementById("calendar-dates9").appendChild(calendar);
document.getElementById("calendar-dates10").appendChild(calendar);
document.getElementById("calendar-dates11").appendChild(calendar);
}


function get_calendar(day_no, days)
{

var table = document.createElement('table');

var tr = document.createElement('tr');

    //row for the day letters

for(var c=0; c<=6; c++)
{

var td1 = document.createElement('td');

td1.setAttribute("id","week");
td1.innerHTML = "SMTWTFS"[c];

tr.appendChild(td1);

    }

table.appendChild(tr);

    //create 2nd row

tr = document.createElement('tr');

var c;
    for(c=0; c<=6; c++){

if(c == day_no){

break;
        }

var td = document.createElement('td');

td.innerHTML = "";

tr.appendChild(td);

}

    var count = 1;

for(; c<=6; c++){

var td = document.createElement('td');

var a = document.createElement('a');

a.setAttribute("id",c);

a.setAttribute("href","")
a.innerHTML = count;



count++;

td.appendChild(a);
tr.appendChild(td);

}

table.appendChild(tr);

    //rest of the date rows

for(var r=3; r<=7; r++)
{
        tr = document.createElement('tr');

for(var c=0; c<=6; c++){

 if(count > days){

table.appendChild(tr);

return table;

 }

var td = document.createElement('td');

var a = document.createElement('a');

a.setAttribute("id",c);

a.setAttribute("href","")
a.innerHTML = count;



count++;

td.appendChild(a);

tr.appendChild(td);

}

table.appendChild(tr);

}

return table;

}
