<?php
//Класс "Контакта"
class Contact {
    private $name;
    private $phone;

    public function __construct($name, $phone) {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }
}

//Класс "Телефонной книги"
class PhoneBook {
    private $contacts = [];

    //Метод для добавления нового контакта 
    public function addContact($name, $phone) {
        $this->contacts[] = new Contact($name, $phone);
    }

    //Метод для поиска контакта по имени 
    private function searchContactByName($name) {
        foreach ($this->contacts as $contact) {
            if ($contact->getName() === $name) {
                return $contact;
            }
        }
        return null;
    }

    //Метод для поиска контакта по номеру 
    private function searchContactByNumber($number) {
        foreach ($this->contacts as $contact) {
            if ($contact->getPhone() === $number) {
                return $contact;
            }
        }
        return null;
    }

    //Метод для поиска контакта 
    public function searchContact($var) {
        if (is_int($var)){
            $result = $this->searchContactByNumber($var);
        }
        else{
            $result = $this->searchContactByName($var);
        }
        if ($result != null) {
            return "Найден контакт: " . $result->getName() . "<br/> Телефон: " . $result->getPhone() . "<br/>";
        } else {
            return "Контакт не найден <br/>";
        }
    }

    //Метод для вывода на экран всех контактов 
    public function printContacts() {
        foreach ($this->contacts as $contact) {
            echo "Контакт: " . $contact->getName() . " ---- " . $contact->getPhone() . "<br/>";
        }
    }

    //Метод для удаления контакта
    public function deleteContacts($id) {
        if($id < count($this->contacts) and $id >= 0){
            unset($this->contacts[$id]);
            echo "Контакт удалён <br/>";
        }
        else{
            echo "Неверный ID <br/>";
        } 
    }

    //Метод для обновления контакта 
    public function updateContact($id, $new_var = null, $new_var2 = null) {
        if($id < count($this->contacts) and $id >= 0){
            $contact = $this->contacts[$id];
            if (is_int($new_var)){
                if (is_string($new_var2)){
                    $contact->setName($new_var2);
                    $contact->setPhone($new_var);
                }
                else{
                    $contact->setPhone($new_var);
                }
            }
        
            elseif (is_string($new_var)) {
                if (is_int($new_var2)){
                    $contact->setName($new_var);
                    $contact->setPhone($new_var2);
                }
                else{
                    $contact->setName($new_var);;
                }
            }
            $this->contacts[$id] = $contact;
            echo "Контакт обновлён <br/>";
        }
        else{
            echo "Неверный ID <br/>";
        }     
    }
}

// Пример использования классов
$phoneBook = new PhoneBook();

//Массивы для заполнения телефонной книги
$names = ["Иван Сударкин", "Дмитрий Зубарев", "Илья Петров", "Андрей Беляков", "Никита Лукьянов", "Денис Сорокин"];
$numbers = [89205212512, 88005553535, 89774451654, 89779656992, 89775072601, 9686733000];

for ($i = 0; $i < count($names); $i++){
    $phoneBook->addContact($names[$i], $numbers[$i]);
}

echo $phoneBook->printContacts(); //Вывод всех контактов
echo "<br/>";

echo $phoneBook->searchContact("Дмитрий Зубарев"); //Поиск контакта по имени
echo "<br/>";

echo $phoneBook->searchContact(89779656992); //Поиск контакта по номеру
echo "<br/>";

$phoneBook->updateContact(3, 89779656900, "Андрей Симецкий"); //Обновление данных контакта
$phoneBook->deleteContacts(1); //Удаление контакта
echo "<br/>";

echo $phoneBook->printContacts();

?>
