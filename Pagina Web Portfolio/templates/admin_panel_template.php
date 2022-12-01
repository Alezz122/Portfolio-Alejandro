<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_panel.css">
    <title>Admin Panel</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="./index.html">
                <svg width="77" height="105" viewBox="0 0 77 105" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.301 104.136C3.42367 103.027 2.229 101.832 1.717 100.552C1.205 99.3573 0.949 98.3333 0.949 97.48C0.949 95.0907 1.80233 91.848 3.509 87.752C5.301 83.656 7.64767 79.0053 10.549 73.8C13.5357 68.5093 16.821 63.048 20.405 57.416C17.2477 57.16 14.5597 56.9893 12.341 56.904C10.1223 56.8187 8.20233 56.776 6.581 56.776H2.101C3.03967 54.3013 4.661 52.5947 6.965 51.656C9.35433 50.632 12.1703 50.12 15.413 50.12C16.8637 50.12 18.357 50.2053 19.893 50.376C21.429 50.5467 23.0077 50.76 24.629 51.016C28.981 44.4453 33.4183 38.088 37.941 31.944C42.549 25.7147 46.8157 20.2107 50.741 15.432C54.7517 10.568 58.0797 6.89866 60.725 4.424C63.1997 2.03466 65.2477 0.839996 66.869 0.839996C67.8077 0.839996 68.8317 1.224 69.941 1.992C71.1357 2.67466 72.373 3.656 73.653 4.936C72.7997 5.61867 71.6903 7.45333 70.325 10.44C69.045 13.3413 67.637 17.0107 66.101 21.448C64.6503 25.8853 63.1997 30.7493 61.749 36.04C60.2983 41.3307 58.933 46.7493 57.653 52.296C56.4583 57.7573 55.477 62.9627 54.709 67.912C54.0263 72.8613 53.685 77.2133 53.685 80.968C53.685 84.2107 54.0263 86.728 54.709 88.52C55.477 90.312 56.7143 91.208 58.421 91.208C60.6397 91.208 63.157 89.672 65.973 86.6C68.789 83.528 71.861 78.7493 75.189 72.264L76.469 73.544C73.909 80.3707 70.6237 85.96 66.613 90.312C62.6877 94.664 58.5917 96.84 54.325 96.84C50.8263 96.84 48.2663 95.304 46.645 92.232C45.109 89.0747 44.341 84.8933 44.341 79.688C44.341 76.9573 44.5117 73.9707 44.853 70.728C45.2797 67.4853 45.8343 64.1147 46.517 60.616C42.7623 60.0187 39.3063 59.5493 36.149 59.208C33.077 58.7813 30.2183 58.3973 27.573 58.056C23.5623 65.48 19.637 73.1173 15.797 80.968C12.0423 88.8187 8.54367 96.5413 5.301 104.136ZM47.413 56.136C48.693 50.504 50.1863 44.8293 51.893 39.112C53.5997 33.3093 55.3917 27.8053 57.269 22.6C59.2317 17.3947 61.0663 12.8293 62.773 8.904C60.1277 10.5253 57.0557 13.4267 53.557 17.608C50.1437 21.704 46.517 26.7387 42.677 32.712C38.837 38.6 34.9117 45.0853 30.901 52.168C33.8023 52.7653 36.661 53.448 39.477 54.216C42.3783 54.8987 45.0237 55.5387 47.413 56.136Z" fill="#F1FAEE"/>
                </svg>
            </a>
        </div>
        <h1>Panel Administration</h1>
    </header>
    <div class="main">
        <form id="searcher" action="" method="GET">
            <div class="search">
                <input type="text" name="search" id="search" placeholder="Search...">
            </div>
            <div class="secondary-buttons">
                <select name="" id="">
                    <option value="category" default>Category</option>
                    <option value="design">Design</option>
                    <option value="web">Web</option>
                </select>
                <select name="" id="">
                    <option value="show" default>Show</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
                <button id="add-item">Add Item
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 12.3333V24.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.3335 18.5H24.6668" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </form>
        <div class="container-add-items" id="container-add-items">
            <form action="" method="GET">
                <div class="input-container">
                    <label for="title">Title</label>
                    <input type="text">
                </div>
                <div class="input-container">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <div class="input-container">
                    <label for="category">Category</label>
                    <select name="category" id="category">
                        <option value="category">Category</option>
                        <option value="design">Design</option>
                        <option value="web">Web</option>
                    </select>
                </div>
                <div class="input-container">
                    <input type="file" name="img" id="img">
                </div>
                <button type="submit">UPLOAD</button>
            </form>
        </div>
        <div class="container-items">
            <div class="item" id="item">
                <div class="description">
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nobis eum, maiores officiis aut facilis blanditiis quae laudantium cupiditate harum aperiam ipsa repellat deserunt corrupti nulla minus recusandae possimus a animi omnis consequatur? Molestias blanditiis libero quisquam maiores hic voluptate nobis, maxime perspiciatis quae officiis, id ratione voluptatibus exercitationem quas!</p>
                </div>
                <div class="buttons">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>
            <div class="item" id="item">
                <div class="description">
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nobis eum, maiores officiis aut facilis blanditiis quae laudantium cupiditate harum aperiam ipsa repellat deserunt corrupti nulla minus recusandae possimus a animi omnis consequatur? Molestias blanditiis libero quisquam maiores hic voluptate nobis, maxime perspiciatis quae officiis, id ratione voluptatibus exercitationem quas!</p>
                </div>
                <div class="buttons">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>
            <div class="item" id="item">
                <div class="description">
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nobis eum, maiores officiis aut facilis blanditiis quae laudantium cupiditate harum aperiam ipsa repellat deserunt corrupti nulla minus recusandae possimus a animi omnis consequatur? Molestias blanditiis libero quisquam maiores hic voluptate nobis, maxime perspiciatis quae officiis, id ratione voluptatibus exercitationem quas!</p>
                </div>
                <div class="buttons">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./admin_panel.js"></script>
</body>
</html>