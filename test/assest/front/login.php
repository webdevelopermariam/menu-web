<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="" type="image/png" />
    <link rel="icon" type="image/gif/png" href="" />
    <link rel="stylesheet" href="/Menuweb.php/assets/stylesheets/index.css">


    <title>Menu</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:wght@100;300;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
      body {
         background: url('../assets/Background.jpg') no-repeat center center; 
        background-color: #8e7729;
        background-size: cover;
        min-height: 100vh;
      }
      .app-bar {
        height: 60px;
        background-color: #8e7729;
        color: white;
        padding: 10px 15px;
      }
      .hand {
        font-size: 30px;
        cursor: pointer;
        color: #fff;
      }
      .hand:hover,
        .hand:focus,
        .hand:active {
            color:#fff; 
            text-decoration: none;
        }
      .category {
        height: 100px;
        background-size: cover;
      }
      .category-box {
        border: 1px solid #8e7729;
        border-radius: 10px;
      }
      .btn_color {
        background-color: #8e7729;
        color: #fff;
      }
      .btn_color_border_radius {
        border-radius: 15px;
      }
      .btn-success {
            background-color: rgb(0, 162, 255);
            cursor: pointer;
            color: #fff;
            
        }
        .btn-success:hover,
        .btn-success:focus,
        .btn-success:active {
            background-color: rgb(0, 162, 255);
            color:rgb(0, 162, 255);
            text-decoration: none;
        }
    </style>
  </head>
  <body>
    <div class="main-div">
      <div class="app-bar">
        <div
          class="container-fluid d-flex justify-content-between align-items-center"
        >
        <a href="http://localhost/test/frontend/ProductDetails.php">
          <span class="hand"><i class="bx bx-left-arrow-alt"></i></span>
          </a>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row m-4 category-box">
          <div class="col-2">
            <img
              src="https://picsum.photos/200/300"
              alt=""
              srcset=""
              width="150px"
              height="150px"
              class="p-2"
            />
          </div>
          <div class="col-10">
            <div class="d-flex justify-content-between">
              <p
                class="category_name align-items-center d-flex text-left text-light"
              >
                <b></b>
              </p>
              <p
                class="category_name align-items-center d-flex text-left text-light"
              >
                <b>Category </b>
              </p>
              <div class="mt-5">
                <img
                  class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                  src="../assets/itm.svg"
                  alt=""
                />
                <img
                  class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                  src="../assets/remove%20itm.svg"
                  alt=""
                />
                <img
                  class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                  src="../assets/delet%20itm.svg"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div class="row m-4 category-box">
            <div class="col-2">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                srcset=""
                width="150px"
                height="150px"
                class="p-2"
              />
            </div>
            <div class="col-10">
              <div class="d-flex justify-content-between">
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b></b>
                </p>
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b>Category </b>
                </p>
                <div class="mt-5">
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/remove%20itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/delet%20itm.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="row m-4 category-box">
            <div class="col-2">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                srcset=""
                width="150px"
                height="150px"
                class="p-2"
              />
            </div>
            <div class="col-10">
              <div class="d-flex justify-content-between">
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b></b>
                </p>
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b>Category </b>
                </p>
                <div class="mt-5">
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/remove%20itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/delet%20itm.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="row m-4 category-box">
            <div class="col-2">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                srcset=""
                width="150px"
                height="150px"
                class="p-2"
              />
            </div>
            <div class="col-10">
              <div class="d-flex justify-content-between">
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b></b>
                </p>
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b>Category </b>
                </p>
                <div class="mt-5">
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/remove%20itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/delet%20itm.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="row m-4 category-box">
            <div class="col-2">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                srcset=""
                width="150px"
                height="150px"
                class="p-2"
              />
            </div>
            <div class="col-10">
              <div class="d-flex justify-content-between">
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b></b>
                </p>
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b>Category </b>
                </p>
                <div class="mt-5">
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/remove%20itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/delet%20itm.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="row m-4 category-box">
            <div class="col-2">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                srcset=""
                width="150px"
                height="150px"
                class="p-2"
              />
            </div>
            <div class="col-10">
              <div class="d-flex justify-content-between">
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b></b>
                </p>
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b>Category </b>
                </p>
                <div class="mt-5">
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/remove%20itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/delet%20itm.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="row m-4 category-box">
            <div class="col-2">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                srcset=""
                width="150px"
                height="150px"
                class="p-2"
              />
            </div>
            <div class="col-10">
              <div class="d-flex justify-content-between">
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b></b>
                </p>
                <p
                  class="category_name align-items-center d-flex text-left text-light"
                >
                  <b>Category </b>
                </p>
                <div class="mt-5">
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/remove%20itm.svg"
                    alt=""
                  />
                  <img
                    class="btn btn_color btn_color_border_radius mt-5 category_name text-left text-light"
                    src="../assets/delet%20itm.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container">
        <textarea class="form-control btn">

        </textarea>
      </div>
      <div class="d-flex justify-content-center m-4 p-3">
        <button type="submit" class="btn btn-success border-radius">اطلب عبر التليكرام</button>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
