<?php
namespace GingerPlugin\Components;

use GingerPlugin\Components\GingerConfig;

class BankConfig extends GingerConfig
{
    const PAYMENT_METHODS_PREFIX = "Dimater Groupe";
    const FILE_PREFIX = "dipaygo_payments";
    const API_ENDPOINT = 'https://api.online.dipaygo.eu';
    const PLUGIN_TECH_PREFIX = 'dipaygo';
    const PLUGIN_NAME = 'dimater-Gruppe';
}