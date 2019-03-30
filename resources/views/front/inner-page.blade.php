@extends('template')

@section('content')

  <div class="site-wrapper site-wrapper--inner">
      <div class="content-wrapper">
        <header class="main-header">
          <nav class="header-navigation">
            <a href="./index.html" class="header-logo">
              GllacyShop
              <img src="img/logo.svg" alt="GllacyShop">
            </a>
            <ul class="site-nav">
              <li class="site-nav__item site-nav__item--current">
                <a href="catalog.html">Каталог</a>
                <div class="site-nav__submenu-container">
                  <ul class="site-nav__submenu">
                    <li class="site-nav__submenu-item site-nav__submenu-item--special"><a href="#">Новинки</a></li>
                    
                    @foreach($categories as $categorie)
                      <li class="site-nav__submenu-item"><a href="#">{{$categorie->title}}</a></li>
                    @endforeach

                  </ul>
                </div>
              </li>
              <li class="site-nav__item"><a href="#">Доставка и оплата</a></li>
              <li class="site-nav__item"><a href="#">О Компании</a></li>
            </ul>
            <ul class="user-nav">
              <li class="user-nav__item user-search">
                <a href="#" class="user-search__link">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" viewBox="0 0 17 17"><path fill="#fff" d="M16.958 15.527L11.75 10.32A6.455 6.455 0 0 0 13 6.5 6.5 6.5 0 1 0 6.5 13a6.465 6.465 0 0 0 3.839-1.263l5.205 5.204 1.414-1.414zM6.5 11C4.019 11 2 8.981 2 6.5S4.019 2 6.5 2 11 4.019 11 6.5 8.981 11 6.5 11z"/></svg>
                  Поиск
                </a>
                <form action="#" method="get" class="user-search__form">
                  <p>
                    <input type="text" name="search" value="" id="search">
                    <label for="search">Что ищем?</label>
                  </p>
                </form>
              </li>
              <li class="user-nav__item user-login">
                <a href="#">
                  <svg class="user-login__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="19" viewBox="0 0 21 19"><g fill="#fff"><path d="M6 14.875L12.917 9.5 6 4.125v2.917H-.042v4.917H6z"/><path d="M18 0H5C3.9 0 3 .9 3 2v2h2V2h13v15H5v-2H3v2c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2z"/></g></svg>
                  Вход
                </a>
              </li>
              <li class="user-nav__item user-basket">
                <a href="#">
                  <svg class="user-basket__icon" xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"><g fill="#fff"><path d="M5.657 2.031L5.422 0H0v2h3.64l1.5 13h13.988l1.699-12.969H5.657zM17.372 13H6.922L5.888 4.031h12.66L17.372 13z"/><circle cx="6.984" cy="18" r="2"/><circle cx="15.984" cy="18" r="2"/></g></svg>
                  Пусто
                </a>
              </li>
            </ul>
          </nav>
          <div class="header-contacts">
            <p>
              <span class="header-contacts__worktime">С 10 до 20, ежедневно</span>
              <span class="header-contacts__tel">8 812 450-25-25</span>
            </p>
          </div>
        </header>

        <main class="main-content">
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item"><a href="index.html">Главная</a></li>
            <li class="breadcrumbs__item"><a href="#">Каталог</a></li>
            <li class="breadcrumbs__item"><a>Сливочное</a></li>
          </ul>
          <h1 class="main-title">Сливочное мороженое</h1>

          <section class="filter">
            <h2 class="visually-hidden">Фильтр товаров:</h2>
            <form action="https://echo.htmlacademy.ru" class="filter-form" method="get">
              <div class="sort">
                <label for="sort" class="filter__title">Сортировка:</label>
                <select id="sort">
                  <option value="rating">По популярности</option>
                  <option value="price">По цене</option>
                  <option value="fat">По жирности</option>
                </select>
              </div>
              <div class="price-range">
                <p class="filter__title price-range__indicator">
                  Цена:
                  <span class="min-price">100</span> руб. &ndash; <span class="max-price">500</span> руб.
                </p>
                <div class="price-range__slider">
                  <div class="price-range__bar">
                    <div class="price-range__active"></div>
                    <div class="price-range__handler price-range__handler--left"></div>
                    <div class="price-range__handler price-range__handler--right"></div>
                  </div>
                </div>
              </div>
              <div class="fat">
                <p class="filter__title">Жирность</p>
                <div class="field-container">
                  <p class="fat__element">
                    <input type="radio" class="visually-hidden" name="fat" value="0" id="fat-0">
                    <label for="fat-0">0%</label>
                  </p>
                  <p class="fat__element">
                    <input type="radio" class="visually-hidden" name="fat" value="10" id="fat-10">
                    <label for="fat-10">до 10%</label>
                  </p>
                  <p class="fat__element">
                    <input type="radio" class="visually-hidden" name="fat" value="30" id="fat-30" checked>
                    <label for="fat-30">до 30%</label>
                  </p>
                  <p class="fat__element">
                    <input type="radio" class="visually-hidden" name="fat" value="40" id="fat-40">
                    <label for="fat-40">выше 30%</label>
                  </p class="fat__element">
                </div>
              </div>
              <div class="fillers">
                <p class="filter__title">Наполнители</p>
                <div class="field-container">
                  <p class="fillers__element">
                    <input type="checkbox" class="visually-hidden" name="chocolate" id="chocolate" checked>
                    <label for="chocolate">Шоколадные</label>
                  </p>
                  <p class="fillers__element">
                    <input type="checkbox" class="visually-hidden" name="shugar" id="shugar" checked>
                    <label for="shugar">Сахарные присыпки</label>
                  </p>
                  <p class="fillers__element">
                    <input type="checkbox" class="visually-hidden" name="fruits" id="fruits">
                    <label for="fruits">Фрукты</label>
                  </p>
                  <p class="fillers__element">
                    <input type="checkbox" class="visually-hidden" name="syrop" id="syrop">
                    <label for="syrop">Сиропы</label>
                  </p>
                  <p class="fillers__element">
                    <input type="checkbox" class="visually-hidden" name="jam" id="jam">
                    <label for="jam">Джемы</label>
                  </p>
                </div>
              </div>
              <input type="submit" value="Применить">
            </form>
          </section>

          <section class="products">
            <h2 class="visually-hidden">Выбранные товары:</h2>
            
              @foreach($products as $product)
                <article class="products-item">
                  <div class="price-and-image">
                    <img src="{{ asset('img') . '/' . $product->image }}" class="products-item__image" width="267" height="267" alt="Ice cream image">
                    <p class="products-item__price">
                      <span class="value">{{$product->price}}</span>
                      <span class="weight"> BY/кг</span>
                    </p>
                  </div>
                  <h1 class="products-item__title"><a href="#">{{$product->title}}</a></h1>
                </article>
              @endforeach

          </section>
          <div class="pagination">
            <ul class="pagination-list">
              <li class="pagination-list__page pagination-list__page--current"><a>1</a></li>
              <li class="pagination-list__page"><a href="#">2</a></li>
              <li class="pagination-list__page"><a href="#">3</a></li>
              <li class="pagination-list__page"><a href="#">4</a></li>
              <li class="pagination-list__page"><a href="#">5</a></li>
            </ul>
          </div>
        </main>
      </div>
      @include('front.partials.footer')
    </div>

@endsection()


                