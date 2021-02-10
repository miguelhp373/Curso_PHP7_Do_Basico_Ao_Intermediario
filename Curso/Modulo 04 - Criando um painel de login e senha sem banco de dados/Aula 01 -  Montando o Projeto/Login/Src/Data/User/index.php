<?php
require_once('../../Services/User.php');

class UserData
{
    private $debug = true;
    private  $dir  = 'files';
    public function Register(User $user)
    {
        try {
            $fileName = $user->getEmail();
            if (!$this->verificationFileExists($fileName)) {
                //cadastra usuario
                $fullDirectory = $this->dir . '/' . $fileName; // files/nomedoarquivo.txt

                $fopen = fopen($fullDirectory, 'w');

                $str = "{$user->getName()};{$user->getEmail()};{$user->getPass()};{$user->getDate()}";
                if (fwrite($fopen, $str)) {
                    fclose($fopen);
                    return 1; //cadastrado com sucesso
                } else {
                    fclose($fopen);
                    return -10; //Erro ao cadastrar
                }
            } else {
                return -1; //usuario já cadastrado
            }
        } catch (Exception $ex) {
            if ($this->debug) {
                echo $ex->getMessage();
            }
        }
    }

    private function verificationFileExists(string $nomeArquivo)
    {
        $fullDirectory = $this->dir . '/' . $nomeArquivo; // files/nomedoarquivo.txt
        //verifica se um diretório existe
        if (file_exists($fullDirectory)) {
            return true;
        } else {
            return false;
        }
    }
}
