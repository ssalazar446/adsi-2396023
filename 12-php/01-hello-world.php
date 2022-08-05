<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Hello World!"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Hello World! </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Template</h1>"; ?>
                <hr>
                <?php 
                print('<p class="text-start text-muted lh-lg">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nam a accusamus recusandae consequuntur eaque, voluptate explicabo libero quam incidunt voluptas, repellendus quis perspiciatis, magni illo doloremque omnis maiores nulla!
                Omnis in iusto tempora aspernatur veritatis commodi fugit facilis voluptatibus, harum sapiente debitis similique dolor dolores animi maxime aliquam ipsum aliquid optio error. Quas recusandae earum tenetur architecto numquam corrupti.
                Excepturi sequi exercitationem quis facilis, nobis alias quia autem minus inventore pariatur, culpa nostrum voluptatem nesciunt accusamus similique voluptas quasi aperiam voluptate repudiandae id corrupti vitae doloribus, illum repellendus. Temporibus.
                Tenetur recusandae quia necessitatibus eaque sint quam voluptate explicabo expedita qui eos, numquam, officia mollitia illum nam modi ex accusantium ratione, repellendus placeat! Quisquam hic deleniti distinctio, recusandae laborum molestias?
                Eos, laborum. Odit nesciunt veritatis optio facilis laborum blanditiis. Accusantium amet, recusandae reiciendis impedit culpa, dolor ex voluptate quisquam, vitae magnam commodi voluptatum tenetur. Laboriosam cupiditate id accusamus consequuntur vel.
                Fugiat quasi at eaque a animi, porro qui error exercitationem alias aut tempore voluptas voluptate neque perferendis accusamus ipsa nihil distinctio odit quisquam excepturi labore deleniti placeat. Dignissimos, itaque veniam!
                Cupiditate eveniet possimus excepturi, illo quia voluptas adipisci nisi hic alias aliquid deserunt eos eius, at aliquam obcaecati. Distinctio fuga dolor explicabo deleniti fugit ab, ducimus et corporis consequatur ullam.
                Optio porro necessitatibus aliquid officiis beatae quia perspiciatis. Cupiditate beatae deserunt, fugit voluptates placeat corporis fuga cum sit perspiciatis quos necessitatibus illum dignissimos vel nam nesciunt suscipit quibusdam. Explicabo, numquam?
                Harum consectetur rem dolores culpa sunt non, nesciunt fuga maxime vero saepe eum voluptatum numquam ullam quae veniam! Beatae sunt adipisci nobis sint commodi iusto ipsa placeat minus tenetur error?
                Eum, distinctio minima! Id culpa porro eveniet praesentium expedita corporis dignissimos laboriosam quam non deleniti, vel omnis earum. Quasi rem odit optio aliquid dolore incidunt quo mollitia nostrum, praesentium dolorum!
                </p>')
                ?>

            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>