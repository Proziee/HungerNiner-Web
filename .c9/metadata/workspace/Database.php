{"filter":false,"title":"Database.php","tooltip":"/Database.php","undoManager":{"mark":40,"position":40,"stack":[[{"start":{"row":1,"column":0},"end":{"row":5,"column":59},"action":"remove","lines":["    $username=\"proziee\";","    $password=\"\";","    $database=\"c9\";","    ","    $conn = mysql_connect('localhost',$username,$password);"],"id":2},{"start":{"row":1,"column":0},"end":{"row":9,"column":90},"action":"insert","lines":["$server = 'localhost';","$username='proziee';","$password='';","$database='c9';","$table = 'event';","$page=1;","$port = 3306;","//create conection","$conn = mysqli_connect($server,$username,$password,$database,$port) or die(mysql_error());"]}],[{"start":{"row":10,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    ","    if(! $conn){","        die('Unable to connect: ' . mysql_error());","    }","    "],"id":3}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":26},"action":"remove","lines":["    mysql_select_db('c9');"],"id":4}],[{"start":{"row":34,"column":0},"end":{"row":35,"column":0},"action":"remove","lines":["",""],"id":5}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"remove","lines":[" "],"id":6}],[{"start":{"row":34,"column":14},"end":{"row":34,"column":25},"action":"remove","lines":["mysql_query"],"id":7}],[{"start":{"row":34,"column":14},"end":{"row":34,"column":15},"action":"insert","lines":["m"],"id":8}],[{"start":{"row":34,"column":15},"end":{"row":34,"column":16},"action":"insert","lines":["y"],"id":9}],[{"start":{"row":34,"column":16},"end":{"row":34,"column":17},"action":"insert","lines":["s"],"id":10}],[{"start":{"row":34,"column":17},"end":{"row":34,"column":18},"action":"insert","lines":["q"],"id":11}],[{"start":{"row":34,"column":18},"end":{"row":34,"column":19},"action":"insert","lines":["l"],"id":12}],[{"start":{"row":34,"column":19},"end":{"row":34,"column":20},"action":"insert","lines":["_"],"id":13}],[{"start":{"row":34,"column":19},"end":{"row":34,"column":20},"action":"remove","lines":["_"],"id":14}],[{"start":{"row":34,"column":19},"end":{"row":34,"column":20},"action":"insert","lines":["i"],"id":15}],[{"start":{"row":34,"column":20},"end":{"row":34,"column":21},"action":"insert","lines":["_"],"id":16}],[{"start":{"row":34,"column":21},"end":{"row":34,"column":22},"action":"insert","lines":["Q"],"id":17}],[{"start":{"row":34,"column":21},"end":{"row":34,"column":22},"action":"remove","lines":["Q"],"id":18}],[{"start":{"row":34,"column":21},"end":{"row":34,"column":22},"action":"insert","lines":["q"],"id":19}],[{"start":{"row":34,"column":14},"end":{"row":34,"column":22},"action":"remove","lines":["mysqli_q"],"id":20},{"start":{"row":34,"column":14},"end":{"row":34,"column":26},"action":"insert","lines":["mysqli_query"]}],[{"start":{"row":31,"column":27},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":32,"column":0},"end":{"row":32,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":35,"column":35},"end":{"row":35,"column":36},"action":"remove","lines":[" "],"id":22}],[{"start":{"row":35,"column":40},"end":{"row":35,"column":41},"action":"remove","lines":[" "],"id":23}],[{"start":{"row":36,"column":9},"end":{"row":36,"column":16},"action":"remove","lines":["$retval"],"id":26},{"start":{"row":36,"column":9},"end":{"row":36,"column":47},"action":"insert","lines":["$retval = mysqli_query($insert,$conn);"]}],[{"start":{"row":36,"column":46},"end":{"row":36,"column":47},"action":"remove","lines":[";"],"id":27}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":5},"action":"insert","lines":["/"],"id":28}],[{"start":{"row":35,"column":5},"end":{"row":35,"column":6},"action":"insert","lines":["/"],"id":29}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":39},"action":"remove","lines":["$insert"],"id":30}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"remove","lines":[","],"id":31}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"remove","lines":["$"],"id":32}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"remove","lines":["c"],"id":33}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"remove","lines":["o"],"id":34}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"remove","lines":["n"],"id":35}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"remove","lines":["n"],"id":36}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"insert","lines":["$"],"id":37}],[{"start":{"row":36,"column":33},"end":{"row":36,"column":34},"action":"insert","lines":["c"],"id":38}],[{"start":{"row":36,"column":34},"end":{"row":36,"column":35},"action":"insert","lines":["o"],"id":39}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":35},"action":"remove","lines":["$co"],"id":40},{"start":{"row":36,"column":32},"end":{"row":36,"column":37},"action":"insert","lines":["$conn"]}],[{"start":{"row":36,"column":37},"end":{"row":36,"column":38},"action":"insert","lines":[","],"id":41}],[{"start":{"row":36,"column":38},"end":{"row":36,"column":39},"action":"insert","lines":["$"],"id":42}],[{"start":{"row":36,"column":39},"end":{"row":36,"column":40},"action":"insert","lines":["i"],"id":43}],[{"start":{"row":36,"column":38},"end":{"row":36,"column":40},"action":"remove","lines":["$i"],"id":44},{"start":{"row":36,"column":38},"end":{"row":36,"column":45},"action":"insert","lines":["$insert"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":13},"end":{"row":3,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1480516408000,"hash":"1223a555a27d798fe335261022c335621aebcbc9"}