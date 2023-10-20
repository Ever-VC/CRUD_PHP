<?php

class clientController {

    public function index()
    {
        require_once "models/Client.php";
        $client = new Client();
        $clients = $client->index();
        require_once "views/clients.php";
    }

    public function show($clientId)
    {
        require_once "models/Client.php";
        $client = new Client();
        $clients = $client->show($clientId);
        require_once "views/client.php";
    }

    public function new()
    {
        require_once "views/newClient.php";
    }

    public function store()
    {
        require_once "models/Client.php";
        $client = new Client();
        $client->store($_POST);
    }

    public function edit($clientId)
    {
        require_once "models/Client.php";
        $client = new Client();
        $clients = $client->show($clientId);
        require_once "views/clientEdit.php";
    }

    public function update($clientId)
    {
        require_once "models/Client.php";
        $client = new Client();
        $client->update($clientId, $_POST);
        //$clients = $client->show($clientId);
    }

    public function delete($clientId)
    {
        require_once "models/Client.php";
        $client = new Client();
        $client->delete($clientId);
    }
}