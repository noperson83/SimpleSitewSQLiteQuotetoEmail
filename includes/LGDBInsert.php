<?php

class LGDBInsert
{
    public function insertContact($contact)
    {
        try {
            // Create (connect to) SQLite database in file
            $file_db = new PDO('sqlite:./db/lockgrooves');
            // Set errormode to exceptions
            $file_db->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);

            // Prepare INSERT statement to SQLite3 file db
            $insert = "INSERT INTO contacts (name, email, phone, instagram, twitter,
                    address1, address2, city, state, zip, country) 
                    VALUES (:name, :email, :phone, :instagram, :twitter,
                    :address1, :address2, :city, :state, :zip, :country)";
            $stmt = $file_db->prepare($insert);

            // Bind parameters to statement variables
            $stmt->bindParam(':name', $contact->name);
            $stmt->bindParam(':email', $contact->email);
            $stmt->bindParam(':phone', $contact->phone);
            $stmt->bindParam(':instagram', $contact->instagram);
            $stmt->bindParam(':twitter', $contact->twitter);

            $stmt->bindParam(':address1', $contact->address1);
            $stmt->bindParam(':address2', $contact->address2);
            $stmt->bindParam(':city', $contact->city);
            $stmt->bindParam(':state', $contact->state);
            $stmt->bindParam(':zip', $contact->zip);
            $stmt->bindParam(':country', $contact->country);

            $stmt->execute();

            return $file_db->lastInsertId();
            
        } catch (PDOException $e) {
            // Print PDOException message
            echo $e->getMessage();
        }
    }

    public function insertOrder($order, $contact)
    {
        try {
            // Create (connect to) SQLite database in file
            $file_db = new PDO('sqlite:./db/lockgrooves');
            // Set errormode to exceptions
            $file_db->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);

            // Prepare INSERT statement to SQLite3 file db
            $insert = "INSERT INTO orders (contact_id,
                    `order`, order_total, unit_price, shipping_price,
                    quantity, `type`, `size`, runtime_one, runtime_two, labels, packaging, rush,
                    artist, title, genre, url, notes) 
                    VALUES (:contact_id,
                    :order, :order_total, :unit_price, :shipping_price,
                    :quantity, :type, :size, :runtime_one, :runtime_two, :labels, :packaging, :rush,
                    :artist, :title, :genre, :url, :notes)";
            $stmt = $file_db->prepare($insert);

            // Bind parameters to statement variables
            $stmt->bindParam(':contact_id', $contact);
            $stmt->bindParam(':order', $order->order);
            $stmt->bindParam(':order_total', $order->order_total);
            $stmt->bindParam(':unit_price', $order->unit_price);
            $stmt->bindParam(':shipping_price', $order->shipping_price);
            $stmt->bindParam(':quantity', $order->quantity);
            $stmt->bindParam(':type', $order->type);
            $stmt->bindParam(':size', $order->size);
            $stmt->bindParam(':runtime_one', $order->runtime_one);
            $stmt->bindParam(':runtime_two', $order->runtime_two);
            $stmt->bindParam(':labels', $order->labels);
            $stmt->bindParam(':packaging', $order->packaging);
            $stmt->bindParam(':rush', $order->rush);
            $stmt->bindParam(':artist', $order->artist);
            $stmt->bindParam(':title', $order->title);
            $stmt->bindParam(':genre', $order->genre);
            $stmt->bindParam(':url', $order->url);
            $stmt->bindParam(':notes', $order->notes);

            $stmt->execute();

        } catch (PDOException $e) {
            // Print PDOException message
            echo $e->getMessage();
        }
    }
}