<?php
class Request {
  protected $requestType;
  protected $requestUri;
  public function __construct() {
    $this->requestType = $_SERVER['REQUEST_METHOD'];
    $this->requestUri = $_SERVER['REQUEST_URI'];
  }
  public function getRequestType() {
    return $this->requestType;
  }
  public function getRequestUri() {
    return $this->requestUri;
  }
  public function get($key) {
    return isset($_GET[$key]) ? $_GET[$key] : null;
  }

  public function post($key) {
    return isset($_POST[$key]) ? $_POST[$key] : null;
  }
}

$request = new Request();
$requestType = $request->getRequestType();
$requestUri = $request->getRequestUri();
$username = $request->get('name');
$password = $request->post('sutitaja-epasts');

print_r($_GET);
print_r($_POST);
$firstname = $_GET['name'];
$email3 = $_GET['sutitaja-epasts'];
$name = $_POST['name'];
$subject = "Website";
$message = $_POST["sutitaja-zina"];

echo $firstname;
echo $lastname;

$mailheader = "From:".$firstname."<".$email3.">\r\n";

$recipient = "ernisd621@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");
?>