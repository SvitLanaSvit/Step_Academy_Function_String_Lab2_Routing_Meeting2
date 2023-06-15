<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            margin: 0 20px;
        }

        .wrapper{
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?
            $links = ["home"=>"?page1", "contacts"=>"?page2", "about"=>"?page3", "project"=>"?page4", "map"=>"?map"];
            echo "<a href='?page=1'>Home</a>";
            echo "<a href='?page=2'>Contacts</a>";
            echo "<a href='?page=3'>About</a>";
            echo "<a href='?page=4'>Project</a>";
            echo "<a href='?page=5'>Map</a>";
            $num = $_GET["page"];
            switch($num){
                case "1":
                    include_once("home.php");
                    break;
                case "2":
                    include_once("contacts.php");
                    break;
                case "3":
                    include_once("about.php");
                    break;
                case "4":
                    include_once("project.php");
                    break;
                case "5":
                    include_once("map.php");
                    break;
                default:
                    echo "There is not this address.";
            }
        ?>
    </div>
</body>
</html>