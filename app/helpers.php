<?php 
		function checkObjectKey($object,$key){
			if(property_exists($object,$key)){
					return $object->$key;
			}else{
					return "Not Update";
			}
                                              
                                           
		}
 ?>