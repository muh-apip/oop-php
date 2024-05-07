<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      .card {
        width: 18rem;
        margin: auto;
        margin-top: 5%;
      }

      .alert{
        margin-top: 5%;
      }
    </style>
 
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            class Book {
                private $code_book;
                private $name;
                private $qty;

                // Constructor
                public function __construct($code_book, $name, $qty) {
                    $this->setCodeBook($code_book);
                    $this->name = $name;
                    $this->setQty($qty);
                }

                // Setter for $code_book
                private function setCodeBook($code_book) {
                    if (preg_match('/^[A-Z]{2}\d{2}$/', $code_book)) {
                        $this->code_book = $code_book;
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Error: Format kode buku tidak valid</div>";
                    }
                }

                // Setter for $name
                private function setName($name) {
                    $this->name = $name;
                }

                // Setter for $qty
                private function setQty($qty) {
                    if (is_int($qty) && $qty > 0) {
                        $this->qty = $qty;
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Error: Quantity harus berupa angka integer positif dan tidak boleh 0</div>";
                    }
                }


                // Getter for $code_book
                public function getCodeBook() {
                    return $this->code_book;
                }

                // Getter for $qty
                public function getQty() {
                    return $this->qty;
                }

                // Getter for $name
                public function getName() {
                    return $this->name;
                }
            }

            // Contoh penggunaan
            $book = new Book("AB01", "Laskar Pelangi", 10);
            ?>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detail Buku</h5>
                    <p class="card-text">Kode Buku: <?php echo $book->getCodeBook(); ?></p>
                    <p class="card-text">Nama Buku: <?php echo $book->getName(); ?></p>
                    <p class="card-text">Quantity: <?php echo $book->getQty(); ?></p>
                </div>
        </div>
    </div>
</div>

</body>
</html>
