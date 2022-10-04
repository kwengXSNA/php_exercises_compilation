<!--  a.    An array variable named list should be initialized;
       b.    There are two functions essential to this application:
              i.    addElement() function – function that accepts an array that will add the array provided to the list variable.
              ii.    getList() function – function that takes the list variable and prints the contents in an unordered list. (Hint: You may need to use another special function to achieve this)
      c.    Provide some data into the list variable using the addElement() function.
      d.    Print the contents of the list  variable using the getList() function. -->


    <?php
        $list=array();
        function addElement($list_val){
            global $list;

            if (is_array($list_val)){
                array_push($list, $list_val);
            } else {
                $not_array = str_split($list_val);
                array_push($list, $list_val);
            }
        }

        function getList(){
            global $list;

            $it = new RecursiveArrayIterator($list);
            $flat = new RecursiveIteratorIterator(new RecursiveArrayIterator($it));

            foreach($flat as $value){
                echo "<ul>";
                echo "<li>". $value. "</li>";
                echo "</ul>";
            }

        }
    ?>
    <?php
    addElement(5);
    addElement(6);
    addElement([22,16,45]);
    getList();
    ?>
            
