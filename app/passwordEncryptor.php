<?php



class StrongPasswordEncryptor
{

    // Encryption method 1
    private static function encryptMethod1($password)
    {
        return hash('sha512', $password);
    }

    // Encryption method 2
    private static function encryptMethod2($password)
    {
        return hash('sha256', $password);
    }

    // Encryption method 3
    private static function encryptMethod3($password)
    {
        $salt1 = uniqid(mt_rand(), true);
        return hash('sha512', $password . $salt1);
    }

    // Encryption method 4
    private static function encryptMethod4($password)
    {
        $salt2 = openssl_random_pseudo_bytes(16);
        $key = hash_pbkdf2("sha512", $password, $salt2, 10000, 64);
        return base64_encode($salt2 . $key);
    }

    // Public method to encrypt password using all methods
    public static function encryptPassword($password)
    {
        $encrypted_password = self::encryptMethod1($password);
        $encrypted_password .= self::encryptMethod2($password);
        // $encrypted_password .= self::encryptMethod3($password);
        // $encrypted_password .= self::encryptMethod4($password);
        return $encrypted_password;
    }
}

// Usage example:
$password = 'hi!';
$encrypted_password = StrongPasswordEncryptor::encryptPassword($password);
echo $encrypted_password;




class PasswordHash
{
    private static $algo = PASSWORD_DEFAULT;
    private static $options = [
        'cost' => 10,
        'salt' => 'SomeSaltHere' // replace with a unique salt
    ];

    public static function hash($password)
    {
        return password_hash($password, self::$algo, self::$options);
    }

    public static function verify($password, $hash)
    {
        return password_verify($password, $hash);
    }
}
