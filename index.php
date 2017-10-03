<?php

	$obj = new main();
	class main {
		public function __construct() {
			$date = date('Y-m-d', time());
			echo "The value of \$date: ".$date."<br>";
			
			$tar = "2017/05/24";
			echo "The value of \$tar: ".$tar."<br>";
			
			$year = array("2012", "396", "300","2000", "1100", "1089");
			echo "The value of \$year: ";
			print_r($year);
	
			dateClass :: replaceString($date);
			dateClass :: dateCompare($date);
			$new_date = date('Y/m/d', time());
			dateClass :: stringPositions($new_date,$find);
			dateClass :: wordCount($date);
			dateClass :: stringLength($date);
			dateClass :: returnASCII($date);
			dateClass :: subString($date);
			dateClass :: stringFunc($new_date); 
			dateClass :: leapYear($year);
			dateClass :: leapYear2($year);
		}
	}
	class dateClass {
		static public function replaceString($date) {
		echo "<br><br>Replacing '-' with '/' in \$date: ".str_replace('-','/',$date)."<br><hr>";
		}
		static public function dateCompare($date) {
			if((strtotime($date))-(strtotime($tar))>0) {
				echo 'The Future';
			} elseif((strtotime($date))-(strtotime($tar))<0) {
				echo 'The Past';
			} else
				echo 'oops';
			echo "<br><hr>";
		}
		static public function stringPositions($new_date,$find) {
			$count = 0;
			$find = "/";
			$positions = array();
			for($i = 0; $i<strlen($new_date); $i++) {
			$pos = strpos($new_date, $find, $count);
				if($pos == $count) {
					$positions[] = $pos;
				}
				$count++;
			}
			echo "All positions for '/' in \$date: ";
			foreach ($positions as $value) {
			echo $value.'&nbsp;';
			}echo '<br><hr>';
		}
		static public function wordCount($date) {
			$result = date('D F j Y',strtotime($date));
			echo "The number of words in \$date: ".str_word_count($result)."<br><hr>";
		}
		static public function stringLength($date) {
			echo "Length of the string \$date: ".strlen($date)."<br><hr>";
		}
		static public function returnASCII($date) {
			echo "ASCII value of the first character in \$date: ".ord($date)."<br><hr>";
		}
		static public function subString($date) {
			echo "Last 2 digits of the \$date: ".substr($date,-2)."<br><hr>";
		}
		static public function stringFunc($new_date) {
			$elements = explode('/',$new_date);
			echo "All array elements in \$date: ".$elements[0].'&nbsp;'.$elements[1].'&nbsp;'.$elements[2]."<br><hr>";
		}
		static public function leapYear($year) {
			foreach($year as $a) {
                		$leapyear = ((($a%400)==0) || ((($a%100)!=0) && (($a%4)==0)));
				switch($leapyear) {
                        		case (true) : echo 'True&nbsp;';
                        		break;
                        		default: echo 'False&nbsp;';
                        		break;
                		}
			}echo '<br>';
		}
		static public function leapYear2($year) {
			for($i=0;$i<sizeof($year);$i++) {
                                switch((($year[$i]%400)==0) || ((($year[$i]%100)!=0) && (($year[$i]%4)==0))) {
                                        case (true) : echo 'True&nbsp;';
                                        break;
                                        default: echo 'False&nbsp;';
                                        break;
                                }
                        }
                }
	}
?>

