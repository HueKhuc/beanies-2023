<?php
class Contact
{
    protected ?string $sujet = '';
    protected ?string $email = '';
    protected ?string $message = '';


    public function __construct(?array $send = [])
    {
        if (!empty($send["email"])) {
            $this->email = trim($send["email"]);
        }
        if (!empty($send["sujet"])) {
            $this->sujet = trim($send["sujet"]);
        }
        if (!empty($send["message"])) {
            $this->message = trim($send["message"]);
        }

    }
    public function validation()
    {
        $erreurs = [];
        if (!empty($this->sujet)) {
            $this->sujet = test_input($this->sujet);
        }
        if (!preg_match("/^[a-zA-Z-' ]*$/", $this->sujet) || empty($this->sujet)) {
            $erreurs['sujet'] = true;
        }


        if (!empty($this->email)) {
            $this->email = test_input($this->email);
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL) || empty($this->email)) {
            $erreurs['email'] = true;
        }



        if (!empty($this->message)) {
            $this->message = test_input($this->message);
        }
        if (!preg_match("/^[a-zA-Z-' ]*$/", $this->message)|| empty($this->message)) {
            $erreurs['message'] = true;
        }

        return $erreurs;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }


    public function getMessage(): ?string
    {
        return $this->message;
    }


    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

}
?>