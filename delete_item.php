<?php

$id=$_GET["id"];


            include("config.php");

                    $sql = "DELETE FROM nyumba WHERE number='".$id."'";

                        if ($con->query($sql) === TRUE) {
                            header("location:all_shoes.php");
                                        } else {
                                            echo "Error deleting record: " . $conn->error;
                                                            }

$con->close();
?>



?>