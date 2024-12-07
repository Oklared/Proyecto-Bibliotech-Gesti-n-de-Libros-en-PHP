<?php

//Libro
class Book {
    private $title;
    private $author;
    private $category;
    private $available;

    public function __construct($title, $author, $category, $available = true) {
        $this->title = $title;
        $this->author = $author;
        $this->category = $category;
        $this->available = $available;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getCategory() {
        return $this->category;
    }

    public function isAvailable() {
        return $this->available;
    }

    public function setAvailability($available) {
        $this->available = $available;
    }

    public function displayDetails() {
        return "Título: {$this->title}, Autor: {$this->author}, Categoría: {$this->category}, Disponible: " . ($this->available ? 'Sí' : 'No');
    }
}

//Biblioteca
class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function searchBooks($query, $type = 'title') {
        $results = [];
        foreach ($this->books as $book) {
            if ($type === 'title' && stripos($book->getTitle(), $query) !== false) {
                $results[] = $book;
            } elseif ($type === 'author' && stripos($book->getAuthor(), $query) !== false) {
                $results[] = $book;
            } elseif ($type === 'category' && stripos($book->getCategory(), $query) !== false) {
                $results[] = $book;
            }
        }
        return $results;
    }
}

// Crear libros
$book1 = new Book("1984", "George Orwell", "Ficción", false);
$book2 = new Book("Cien Años de Soledad", "Gabriel García Márquez", "Realismo Mágico");
$book3 = new Book("El Hobbit", "J.R.R. Tolkien", "Fantasía");
$book4 = new Book("Don Quijote de la Mancha", "Miguel de Cervantes", "Clásico");
$book5 = new Book("El Código Da Vinci", "Dan Brown", "Misterio");
$book6 = new Book("La Sombra del Viento", "Carlos Ruiz Zafón", "Suspenso");
$book7 = new Book("Fahrenheit 451", "Ray Bradbury", "Ciencia Ficción", false);
$book8 = new Book("Orgullo y Prejuicio", "Jane Austen", "Romántico");
$book9 = new Book("Matar a un Ruiseñor", "Harper Lee", "Drama");
$book10 = new Book("Harry Potter y la Piedra Filosofal", "J.K. Rowling", "Fantasía");
$book11 = new Book("La Odisea", "Homero", "Épico");
$book12 = new Book("El Gran Gatsby", "F. Scott Fitzgerald", "Ficción",false);
$book13 = new Book("Cumbres Borrascosas", "Emily Brontë", "Romántico");
$book14 = new Book("Crimen y Castigo", "Fiódor Dostoyevski", "Psicológico");
$book15 = new Book("Drácula", "Bram Stoker", "Terror");
$book16 = new Book("Moby Dick", "Herman Melville", "Aventura");
$book17 = new Book("1984", "George Orwell", "Distopía");
$book18 = new Book("La Casa de los Espíritus", "Isabel Allende", "Ficción");
$book19 = new Book("El Retrato de Dorian Gray", "Oscar Wilde", "Clásico");
$book20 = new Book("El Señor de los Anillos: La Comunidad del Anillo", "J.R.R. Tolkien", "Fantasía");
$book21 = new Book("El Perfume", "Patrick Süskind", "Suspenso");
$book22 = new Book("Los Miserables", "Victor Hugo", "Clásico");
$book23 = new Book("El Alquimista", "Paulo Coelho", "Filosofía");
$book24 = new Book("Los Juegos del Hambre", "Suzanne Collins", "Ciencia Ficción");
$book25 = new Book("La Bella y la Bestia", "Jeanne-Marie Leprince de Beaumont", "Cuento");
$book26 = new Book("El Retrato de Dorian Gray", "Oscar Wilde", "Filosofía");
$book27 = new Book("La Metamorfosis", "Franz Kafka", "Surrealismo");
$book28 = new Book("Ulises", "James Joyce", "Literatura Moderna");
$book29 = new Book("En Busca del Tiempo Perdido", "Marcel Proust", "Literatura Clásica");
$book30 = new Book("El Silencio de los Corderos", "Thomas Harris", "Terror");
$book31 = new Book("El Túnel", "Ernesto Sabato", "Psicológico");
$book32 = new Book("El Diario de Ana Frank", "Ana Frank", "Biografía");
$book33 = new Book("La Larga Marcha", "Stephen King", "Terror");
$book34 = new Book("Las Aventuras de Sherlock Holmes", "Arthur Conan Doyle", "Policíaco");
$book35 = new Book("V for Vendetta", "Alan Moore", "Gráfico");
$book36 = new Book("El Hobbit", "J.R.R. Tolkien", "Fantasía", false);
$book37 = new Book("El Zorro", "Isabel Allende", "Aventura");
$book38 = new Book("En el Camino", "Jack Kerouac", "Autobiográfico");
$book39 = new Book("La Cabaña", "William P. Young", "Religión");
$book40 = new Book("Los Pilares de la Tierra", "Ken Follett", "Histórico");

// Crear biblioteca y agregar libros
$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);
$library->addBook($book4);
$library->addBook($book5);
$library->addBook($book6);
$library->addBook($book7);
$library->addBook($book8);
$library->addBook($book9);
$library->addBook($book10);
$library->addBook($book11);
$library->addBook($book12);
$library->addBook($book13);
$library->addBook($book14);
$library->addBook($book15);
$library->addBook($book16);
$library->addBook($book17);
$library->addBook($book18);
$library->addBook($book19);
$library->addBook($book20);
$library->addBook($book21);
$library->addBook($book22);
$library->addBook($book23);
$library->addBook($book24);
$library->addBook($book25);
$library->addBook($book26);
$library->addBook($book27);
$library->addBook($book28);
$library->addBook($book29);
$library->addBook($book30);
$library->addBook($book31);
$library->addBook($book32);
$library->addBook($book33);
$library->addBook($book34);
$library->addBook($book35);
$library->addBook($book36);
$library->addBook($book37);
$library->addBook($book38);
$library->addBook($book39);
$library->addBook($book40);

// si el formulario se cumple, ejecutar la busqueda de el libro
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $type = $_GET['type'];
    $results = $library->searchBooks($query, $type);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech - Buscar Libro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        h1 {
            color: #2c3e50;
        }

        form {
            margin-bottom: 20px;
        }

        label, select, input, button {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Buscar Libro en la Bibliotech</h1>

    <form action="" method="GET">
        <label for="query">Buscar:</label>
        <input type="text" id="query" name="query" required>

        <label for="type">Buscar por:</label>
        <select name="type" id="type">
            <option value="title">Título</option>
            <option value="author">Autor</option>
            <option value="category">Categoría</option>
        </select>

        <button type="submit">Buscar</button>
    </form>

    <?php
    // ejemplo de busqueda de libros
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
        $type = $_GET['type'];
        
        $books = [
            ["title" => "1984", "author" => "George Orwell", "category" => "Ficción", "available" => false],
            ["title" => "Cien Años de Soledad", "author" => "Gabriel García Márquez", "category" => "Realismo Mágico", "available" => true],
            ["title" => "El Hobbit", "author" => "J.R.R. Tolkien", "category" => "Fantasía", "available" => true],
            ["title" => "Don Quijote de la Mancha", "author" => "Miguel de Cervantes", "category" => "Clásico", "available" => true],
            ["title" => "El Código Da Vinci", "author" => "Dan Brown", "category" => "Misterio", "available" => true],
            ["title" => "La Sombra del Viento", "author" => "Carlos Ruiz Zafón", "category" => "Suspenso", "available" => true],
            ["title" => "Fahrenheit 451", "author" => "Ray Bradbury", "category" => "Ciencia Ficción", "available" => false],
            ["title" => "Orgullo y Prejuicio", "author" => "Jane Austen", "category" => "Romántico", "available" => true],
            ["title" => "Matar a un Ruiseñor", "author" => "Harper Lee", "category" => "Drama", "available" => true],
            ["title" => "Harry Potter y la Piedra Filosofal", "author" => "J.K. Rowling", "category" => "Fantasía", "available" => true],
            ["title" => "La Odisea", "author" => "Homero", "category" => "Épico", "available" => true],
            ["title" => "El Gran Gatsby", "author" => "F. Scott Fitzgerald", "category" => "Ficción", "available" => false],
            ["title" => "Cumbres Borrascosas", "author" => "Emily Brontë", "category" => "Romántico", "available" => true],
            ["title" => "Crimen y Castigo", "author" => "Fiódor Dostoyevski", "category" => "Psicológico", "available" => true],
            ["title" => "Drácula", "author" => "Bram Stoker", "category" => "Terror", "available" => true],
            ["title" => "Moby Dick", "author" => "Herman Melville", "category" => "Aventura", "available" => true],
            ["title" => "La Casa de los Espíritus", "author" => "Isabel Allende", "category" => "Ficción", "available" => true],
            ["title" => "El Retrato de Dorian Gray", "author" => "Oscar Wilde", "category" => "Clásico", "available" => true],
            ["title" => "El Señor de los Anillos: La Comunidad del Anillo", "author" => "J.R.R. Tolkien", "category" => "Fantasía", "available" => true],
            ["title" => "El Perfume", "author" => "Patrick Süskind", "category" => "Suspenso", "available" => true],
            ["title" => "Los Miserables", "author" => "Victor Hugo", "category" => "Clásico", "available" => true],
            ["title" => "El Alquimista", "author" => "Paulo Coelho", "category" => "Filosofía", "available" => true],
            ["title" => "Los Juegos del Hambre", "author" => "Suzanne Collins", "category" => "Ciencia Ficción", "available" => true],
            ["title" => "La Bella y la Bestia", "author" => "Jeanne-Marie Leprince de Beaumont", "category" => "Cuento", "available" => true],
            ["title" => "La Metamorfosis", "author" => "Franz Kafka", "category" => "Surrealismo", "available" => true],
            ["title" => "Ulises", "author" => "James Joyce", "category" => "Literatura Moderna", "available" => true],
            ["title" => "En Busca del Tiempo Perdido", "author" => "Marcel Proust", "category" => "Literatura Clásica", "available" => true],
            ["title" => "El Silencio de los Corderos", "author" => "Thomas Harris", "category" => "Terror", "available" => true],
            ["title" => "El Túnel", "author" => "Ernesto Sabato", "category" => "Psicológico", "available" => true],
            ["title" => "El Diario de Ana Frank", "author" => "Ana Frank", "category" => "Biografía", "available" => true],
            ["title" => "La Larga Marcha", "author" => "Stephen King", "category" => "Terror", "available" => true],
            ["title" => "Las Aventuras de Sherlock Holmes", "author" => "Arthur Conan Doyle", "category" => "Policíaco", "available" => true],
            ["title" => "V for Vendetta", "author" => "Alan Moore", "category" => "Gráfico", "available" => true],
            ["title" => "El Zorro", "author" => "Isabel Allende", "category" => "Aventura", "available" => true],
            ["title" => "En el Camino", "author" => "Jack Kerouac", "category" => "Autobiográfico", "available" => true],
            ["title" => "La Cabaña", "author" => "William P. Young", "category" => "Religión", "available" => true],
            ["title" => "Los Pilares de la Tierra", "author" => "Ken Follett", "category" => "Histórico", "available" => true]
        ];
        

        $results = [];
        foreach ($books as $book) {
            if ($type == 'title' && stripos($book['title'], $query) !== false) {
                $results[] = $book;
            } elseif ($type == 'author' && stripos($book['author'], $query) !== false) {
                $results[] = $book;
            } elseif ($type == 'category' && stripos($book['category'], $query) !== false) {
                $results[] = $book;
            }
        }
    ?>

    <h2>Resultados de la Búsqueda</h2>

    <?php if (count($results) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Categoría</th>
                    <th>Disponible</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $book): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($book['title']); ?></td>
                        <td><?php echo htmlspecialchars($book['author']); ?></td>
                        <td><?php echo htmlspecialchars($book['category']); ?></td>
                        <td><?php echo $book['available'] ? 'Sí' : 'No'; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No se encontraron resultados para "<?php echo htmlspecialchars($query); ?>" en la categoría "<?php echo htmlspecialchars($type); ?>".</p>
    <?php endif; ?>

    <?php } ?>
</body>
</html>




















