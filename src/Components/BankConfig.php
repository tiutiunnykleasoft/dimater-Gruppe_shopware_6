<?php
namespace GingerPlugin\Components;

use GingerPlugin\Components\GingerConfig;

class BankConfig extends GingerConfig
{
    const PAYMENT_METHODS_PREFIX = "Dimater Payments";
    const FILE_PREFIX = "dimater_payment";
    const API_ENDPOINT = 'https://api.paygate.dipaygo.cloud/';
    const PLUGIN_TECH_PREFIX = 'dimater';
    const PLUGIN_NAME = 'dimater';
}