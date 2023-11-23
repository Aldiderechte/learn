<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login.twig */
class __TwigTemplate_315c54aeb54a8a74c9e023aca10fa8e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
<head>
    <title>Login und Registrierung</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 20px;
            color: #555;
        }

        input[type=\"text\"],
        input[type=\"password\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #ddd;
            background-color: transparent;
        }

        input[type=\"submit\"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type=\"submit\"]:hover {
            background-color: #0056b3;
        }

        .divider {
            margin-top: 20px;
            border-top: 1px solid #ddd;
        }

        .switch-form {
            margin-top: 20px;
            color: #007BFF;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class=\"form-container\">
    <h1>Login</h1>
    <form action=\"login.php\" method=\"post\">
        <label for=\"username\">Benutzername:</label>
        <input type=\"text\" id=\"username\" name=\"username\" required>

        <label for=\"password\">Passwort:</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>

        <input type=\"submit\" value=\"Anmelden\">
    </form>

    <div class=\"divider\"></div>

    <p class=\"switch-form\">Noch kein Konto vorhanden? <a href=\"#\" onclick=\"toggleForm()\">Registrieren</a></p>
</div>

<div class=\"form-container\" style=\"display: none;\">
    <h1>Registrierung</h1>
    <form action=\"register.php\" method=\"post\">
        <label for=\"new_username\">Neuer Benutzername:</label>
        <input type=\"text\" id=\"new_username\" name=\"new_username\" required>

        <label for=\"new_password\">Neues Passwort:</label>
        <input type=\"password\" id=\"new_password\" name=\"new_password\" required>

        <label for=\"confirm_password\">Passwort bestaetigen:</label>
        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" required>

        <input type=\"submit\" value=\"Registrieren\">
    </form>

    <div class=\"divider\"></div>

    <p class=\"switch-form\">Bereits ein Konto vorhanden? <a href=\"#\" onclick=\"toggleForm()\">Anmelden</a></p>
</div>

<script>
    function toggleForm() {
        const loginForm = document.querySelector('.form-container:nth-child(1)');
        const registerForm = document.querySelector('.form-container:nth-child(2)');

        loginForm.style.display = loginForm.style.display === 'none' ? 'block' : 'none';
        registerForm.style.display = registerForm.style.display === 'none' ? 'block' : 'none';
    }
</script>
</body>
</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.twig", "/var/www/learn/src/User/Templates/login.twig");
    }
}
