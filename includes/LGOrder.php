<?php

class LGOrder
{
    public $order;
    public $order_total;
    public $unit_price;
    public $shipping_price;
    public $quantity;
    public $type;
    public $size;
    public $runtime_one;
    public $runtime_two;
    public $labels;
    public $packaging;
    public $rush;
    public $artist;
    public $title;
    public $genre;
    public $url;
    public $notes;
    
    public function __construct($input)
    {
        $this->order = date('Ymd') . '-' . self::generateRandomString();
        $this->order_total = isset($input['total']) ? $input['total'] : '';
        $this->unit_price = isset($input['unit']) ? $input['unit'] : '';
        $this->shipping_price = isset($input['shipping']) ? $input['shipping'] : '';
        $this->quantity = isset($input['quantity']) ? $input['quantity'] : '';
        $this->type = isset($input['type']) ? $input['type'] : '';
        $this->size = isset($input['size']) ? $input['size'] : '';
        $this->runtime_one = isset($input['sideone']) ? $input['sideone'] : '';
        $this->runtime_two = isset($input['sidetwo']) ? $input['sidetwo'] : '';
        $this->labels = isset($input['labels']) ? $input['labels'] : '';
        $this->packaging = isset($input['packaging']) ? $input['packaging'] : '';
        $this->rush = isset($input['rush']) ? 1 : 0;
        $this->artist = isset($input['artist']) ? $input['artist'] : '';
        $this->title = isset($input['title']) ? $input['title'] : '';
        $this->genre = isset($input['genre']) ? $input['genre'] : '';
        $this->url = isset($input['url']) ? $input['url'] : '';
        $this->notes = isset($input['notes']) ? $input['notes'] : '';
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return strtoupper($randomString);
    }
}