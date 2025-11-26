<?php
// FAKE DATABASE EN MÉMOIRE - ZÉRO CONFIG - MARCHE DIRECT
session_start();

$events = [
    1 => [
        'id' => 1,
        'title' => 'Concert de Jazz Live',
        'description' => 'Soirée exceptionnelle avec les meilleurs musiciens de Sousse',
        'date' => '2025-12-12 20:00:00',
        'location' => 'Théâtre Municipal de Sousse',
        'seats' => 150,
        'image' => 'jazz.jpg'
    ],
    2 => [
        'id' => 2,
        'title' => 'Conférence Intelligence Artificielle',
        'description' => 'Les dernières avancées en IA avec des experts internationaux',
        'date' => '2025-12-20 14:00:00',
        'location' => 'Amphithéâtre ISSAT Sousse',
        'seats' => 80,
        'image' => 'ia.jpg'
    ],
    3 => [
        'id' => 3,
        'title' => 'Tournoi Gaming FIFA & Valorant',
        'description' => '5000 DT de cashprize - Inscription gratuite',
        'date' => '2025-12-28 10:00:00',
        'location' => 'Salle Polyvalente ISSAT',
        'seats' => 200,
        'image' => 'gaming.jpg'
    ]
];

// Simule une connexion "PDO"
class FakePDO {
    public function query($sql) {
        global $events;
        return new class($events) {
            private $data;
            public function __construct($data) { $this->data = $data; }
            public function fetchAll() { return array_values($this->data); }
        };
    }
    public function prepare($sql) {
        return new class {
            private $id;
            public function bindParam($a, $b) {}
            public function execute($params = []) {
                global $events;
                $this->id = $params[0] ?? null;
                return true;
            }
            public function fetch() {
                global $events;
                return $events[$this->id] ?? false;
            }
        };
    }
}

$pdo = new FakePDO();