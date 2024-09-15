$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bim';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    echo "Not connected!!";
};

echo "connected";