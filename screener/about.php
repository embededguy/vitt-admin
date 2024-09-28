<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Vitt - Screener </title>
  <meta content="" property="og:title">
  <meta content="" property="twitter:title">
  <meta name="description" content="">

  <link href="./assets/media/images/icons/logo.svg" rel="shortcut icon" type="image/x-icon" />
  <link href="./assets/css/styles.bundle.css" rel="stylesheet" type="text/css" />
  <link href="./assets/plugins/slick/slick.css" rel="stylesheet" type="text/css" />
  <link href="./assets/plugins/aos-master/src/aos.css" rel="stylesheet" type="text/css" />
  <link href="./assets/plugins/apexcharts/apexcharts.css" rel="stylesheet" type="text/css" />
  <link href="./assets/css/pages/app.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com" rel="preconnect" >
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body class="">
  <?php include_once "./components/header.php";?>
  <div style="height:100px"></div>
  <section class="hero hero-v2">
    <div class="hero__background hero__background--grid">
      <img class="hero__grid-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-hero-grid-bg.png" alt="Background Grid Hero" />
    </div>
    <div class="hero__background hero__background--pattern">
      <img class="hero__pattern-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-hero-pattern.png" alt="Background Pattern Hero" />
    </div>
    <div class="hero__background--mobile hero__background--grid">
      <img class="hero__grid-bg" src="./assets/media/images/landing-page-v2/mobile-landing-page-v2-hero-grid.png" alt="Background Grid Hero" />
    </div>
    <div class="hero__background--mobile hero__background--pattern">
      <img class="hero__pattern-bg" src="./assets/media/images/landing-page-v2/mobile-landing-page-v2-hero-pattern.png" alt="Background Pattern Hero" />
    </div>
    <div class="container">
      <div class="hero__container">
        <div class="hero__content" data-aos="fade-right">
          <h1 class="hero__title">Your Trusted Screener App.</h1>
          <p class="fb-lg hero__subtitle">Your guide to the world of an open financial system. Get started with the easiest and most secure platform to buy and trade cryptocurrency.</p>
          <a href="#" class="btn btn-primary btn-lg btn-pill hero__link">Get Started Now</a>
        </div>
        <div class="hero__illustration" data-aos="zoom-in-up" data-aos-delay="100">
          <img src="./assets/media/images/landing-page-v2/landing-page-v2-hero-illustration.png" alt="Hero Illustration" />
        </div>
      </div>
    </div>
    <div class="container crypto-graph" data-aos="fade-up" data-aos-delay="200">
      <div class="crypto-graph-carousel">
        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-btc.svg" alt="btc">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__img">
              <div id="crypto-graph-item-graph__graph-1" class="crypto-graph-item-graph__img-render"></div>
            </div>
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bullish">
              <img src="./assets/media/images/icons/arrow-bullish.svg" alt="Up">
              <p class="fd-lg--bold">2.11%</p>
            </div>
          </div>
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">NIFTY 50</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md fd-md--bold crypto-graph-item__price">26,260</p>
            <p class="fb-regular crypto-graph-item__code">BTC</p>
          </div>
        </div>
        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-eth.svg" alt="logo-eth">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__img">
              <div id="crypto-graph-item-graph__graph-2" class="crypto-graph-item-graph__img-render"></div>
            </div>
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bearish">
              <img src="./assets/media/images/icons/arrow-bearish.svg" alt="Down">
              <p class="fd-lg--bold">1.53%</p>
            </div>
          </div>
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">Ethereum</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md fd-md--bold crypto-graph-item__price">USD 1,643.80</p>
            <p class="fb-regular crypto-graph-item__code">eth</p>
          </div>
        </div>
        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-usdt.svg" alt="usdt">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__img">
              <div id="crypto-graph-item-graph__graph-3" class="crypto-graph-item-graph__img-render"></div>
            </div>
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bullish">
              <img src="./assets/media/images/icons/arrow-bullish.svg" alt="Up">
              <p class="fd-lg--bold">0.11%</p>
            </div>
          </div>
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">Tether</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md fd-md--bold crypto-graph-item__price">USD 0.9999</p>
            <p class="fb-regular crypto-graph-item__code">usdt</p>
          </div>
        </div>
        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-bnb.svg" alt="bnb">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__img">
              <div id="crypto-graph-item-graph__graph-4" class="crypto-graph-item-graph__img-render"></div>
            </div>
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bullish">
              <img src="./assets/media/images/icons/arrow-bullish.svg" alt="Up">
              <p class="fd-lg--bold">0.33%</p>
            </div>
          </div>
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">Binance Coin</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md fd-md--bold crypto-graph-item__price">USD 247.71</p>
            <p class="fb-regular crypto-graph-item__code">bnb</p>
          </div>
        </div>
        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-xrp.svg" alt="xrp">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__img">
              <div id="crypto-graph-item-graph__graph-5" class="crypto-graph-item-graph__img-render"></div>
            </div>
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bearish">
              <img src="./assets/media/images/icons/arrow-bearish.svg" alt="Up">
              <p class="fd-lg--bold">1.49%</p>
            </div>
          </div>
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">XRP</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md fd-md--bold crypto-graph-item__price">USD 0.5464</p>
            <p class="fb-regular crypto-graph-item__code">XRP</p>
          </div>
        </div>
      </div>
      <div class="slick__pagination">
        <div class="crypto-graph-carousel__pagination slick__pagination--dots">
          <div class="crypto-graph-carousel__slick-slider-dots slick-slider-dots"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- End::Hero & Crypto Graph Section -->
  
  <!-- Start::Feature Section -->
  <section class="feature">
    <div class="feature__background feature__background--pattern">
      <img class="feature__pattern-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-feature-pattern.png" alt="Background Pattern Feature" />
    </div>
    <div class="feature__background--mobile feature__background--pattern">
      <img class="feature__pattern-bg" src="./assets/media/images/landing-page-v2/mobile-landing-page-v2-feature-pattern.png" alt="Background Pattern Feature" />
    </div>
    <div class="container">
      <div class="feature__container">
        <div class="feature__group">
          <div class="feature__items feature__items--1" data-aos="zoom-in-up" data-aos-delay="100">
            <div class="feature-items__img">
              <img src="./assets/media/images/icons/icon-portofolio-manager.svg" alt="Portofolio Manager">
            </div>
            <h5 class="feature-items__title">Portfolio Manager</h5>
            <p class="fb-regular feature-items__desc">Buy and sell popular digital currencies, keep track of them in the one place.</p>
          </div>
          <div class="feature__items feature__items--2" data-aos="zoom-in-up" data-aos-delay="200">
            <div class="feature-items__img">
              <img src="./assets/media/images/icons/phone.svg" alt="Mobile Apps">
            </div>
            <h5 class="feature-items__title">Mobile Apps</h5>
            <p class="fb-regular feature-items__desc">Stay on top of the markets with the Cryptolly app for Android or iOS.</p>
          </div>
          <div class="feature__items feature__items--3" data-aos="zoom-in-up" data-aos-delay="300">
            <div class="feature-items__img">
              <img src="./assets/media/images/icons/lock.svg" alt="Vault protection">
            </div>
            <h5 class="feature-items__title">Vault protection</h5>
            <p class="fb-regular feature-items__desc">For added security, store your funds in a vault with time delayed withdrawals.</p>
          </div>
        </div>
        <div class="feature__content" data-aos="fade-up" data-aos-duration="500">
          <h2 class="feature__title">The most trusted cryptocurrency platform.</h2>
          <p class="fb-regular feature__subtitle">Cryptolly has a variety of features that make it the best place to start trading</p>
          <a href="#" class="btn btn-primary btn-pill feature__button">Let’s Trade Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End::Feature Section -->
  
  <!-- Start::Exchange / Buy Sell Section -->
  <section class="exchange">
    <div class="exchange__background exchange__background--pattern">
      <img class="exchange__pattern-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-exchange-pattern.png" alt="Background Pattern Exchange" />
    </div>
    <div class="exchange__background--mobile exchange__background--pattern">
      <img class="exchange__pattern-bg" src="./assets/media/images/landing-page-v2/mobile-landing-page-v2-exchange-pattern.png" alt="Background Pattern Exchange" />
    </div>
    <div class="container">
      <div class="exchange__container">
        <div class="exchange__content">
          <h2 class="exchange__title" data-aos="fade-up">One click, instant payout with credit or debit card.</h2>
          <p class="fb-regular exchange__subtitle" data-aos="fade-up" data-aos-delay="100">Become a crypto owner in minutes using your debit or credit card and quickly purchase top cryptocurrencies.</p>
          <div class="exchange__groups">
            <div class="exchange__items exchange__items--1" data-aos="fade-right" data-aos-delay="300">
              <div class="exchange-items__icons">
                <img src="./assets/media/images/icons/add-user.svg" alt="Add User">
              </div>
              <div class="exchange-items__detail">
                <h5>Create an account</h5>
              </div>
            </div>
            <div class="exchange__items exchange__items--2" data-aos="fade-right" data-aos-delay="400">
              <div class="exchange-items__icons">
                <img src="./assets/media/images/icons/bank.svg" alt="Bank">
              </div>
              <div class="exchange-items__detail">
                <h5>Link your bank account</h5>
              </div>
            </div>
            <div class="exchange__items exchange__items--3" data-aos="fade-right" data-aos-delay="500">
              <div class="exchange-items__icons">
                <img src="./assets/media/images/icons/wallet.svg" alt="Wallet">
              </div>
              <div class="exchange-items__detail">
                <h5>Start buying & selling</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="buy-sell-cards buy-sell-cards--v2" data-aos="zoom-in-up" data-aos-delay="600">
          <div class="buy-sell-cards__container">
            <div class="buy-sell-cards__header nav nav-tabs" id="buySellTab" role="tablist">
              <div class="nav-item" role="presentation">
                <button class="nav-link fb-lg--bold buy-sell-cards__link active" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy-tab-pane" type="button" role="tab" aria-controls="buy-tab-pane" aria-selected="true">Buy</button>
              </div>
              <div class="separator"></div>
              <div class="nav-item" role="presentation">
                <button class="nav-link fb-lg--bold buy-sell-cards__link" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell-tab-pane" type="button" role="tab" aria-controls="sell-tab-pane" aria-selected="false">Sell</button>
              </div>
            </div>
            <div class="tab-content" id="buySellTabContent">
              <div class="tab-pane fade show active" id="buy-tab-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                <div class="buy-sell-cards__detail">
                  <div class="buy-sell-cards__detail--prices">
                    <p class="fb-regular notes">1 BTC is roughly</p>
                    <p class="fd-md fd-md--bold value">53,260.20<span class="fb-lg currency">USD</span></p>
                  </div>
                  <div class="buy-sell-cards__detail--rewards">
                    <p class="fb-regular rewards">Claim <span class="fb-regular fb-regular--bold">$10</span> in Rewards</p>
                  </div>
                </div>
                <div class="buy-sell-cards__forms">
                  <div class="d-block forms-purchase__box">
                    <div class="forms-purchase">
                      <div class="forms-group forms-group--value">
                        <input type="number" min="0" value="4000" class="form-control forms-purchase__value">
                      </div>
                      <div class="forms-purchase__line"></div>
                      <div class="forms-group forms-group--purchase js-forms-group--purchase" id="custom-select1">
                        <div class="forms-group__items selected" data-selected="usd">
                          <img class="fg-items__icon" src="./assets/media/images/icons/usd.svg" alt="">
                          <p class="fg-items__value">USD</p>
                        </div>
                        <img class="forms-currency__icon-arrow-down" src="./assets/media/images/icons/arrow-down.svg" alt="">
                        <div class="forms-group__dropdown js-forms-group__dropdown">
                          <div class="forms-group__items active" data-selected="usd">
                            <img class="fg-items__icon" src="./assets/media/images/icons/usd.svg" alt="">
                            <p class="fg-items__value">USD</p>
                          </div>
                          <div class="forms-group__items" data-selected="btc">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-btc.svg" alt="">
                            <p class="fg-items__value">BTC</p>
                          </div>
                          <div class="forms-group__items" data-selected="eth">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-eth.svg" alt="">
                            <p class="fg-items__value">ETH</p>
                          </div>
                          <div class="forms-group__items" data-selected="bnb">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-bnb.svg" alt="">
                            <p class="fg-items__value">BNB</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-block forms-purchase__box">
                    <div class="forms-purchase">
                      <div class="forms-group forms-group--value">
                        <input type="number" min="0" value="0.074153" class="form-control forms-purchase__value">
                      </div>
                      <div class="forms-purchase__line"></div>
                      <div class="forms-group forms-group--purchase js-forms-group--purchase" id="custom-select2">
                        <div class="forms-group__items selected" data-selected="btc">
                          <img class="fg-items__icon" src="./assets/media/images/icons/logo-btc.svg" alt="">
                          <p class="fg-items__value">BTC</p>
                        </div>
                        <img class="forms-currency__icon-arrow-down" src="./assets/media/images/icons/arrow-down.svg" alt="">
                        <div class="forms-group__dropdown js-forms-group__dropdown">
                          <div class="forms-group__items active" data-selected="btc">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-btc.svg" alt="">
                            <p class="fg-items__value">BTC</p>
                          </div>
                          <div class="forms-group__items" data-selected="usd">
                            <img class="fg-items__icon" src="./assets/media/images/icons/usd.svg" alt="">
                            <p class="fg-items__value">USD</p>
                          </div>
                          <div class="forms-group__items" data-selected="eth">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-eth.svg" alt="">
                            <p class="fg-items__value">ETH</p>
                          </div>
                          <div class="forms-group__items" data-selected="bnb">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-bnb.svg" alt="">
                            <p class="fg-items__value">BNB</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-lg btn-pill">Buy Now</button>
                </div>
              </div>
              <div class="tab-pane fade" id="sell-tab-pane" role="tabpanel" aria-labelledby="sell-tab" tabindex="0">
                <div class="buy-sell-cards__detail">
                  <div class="buy-sell-cards__detail--prices">
                    <p class="fb-regular notes">1 BTC is roughly</p>
                    <p class="fd-md fd-md--bold value">53,260.20<span class="fb-lg currency">USD</span></p>
                  </div>
                  <div class="buy-sell-cards__detail--rewards">
                    <p class="fb-regular rewards">Claim <span class="fb-regular fb-regular--bold">$10</span> in Rewards</p>
                  </div>
                </div>
                <div class="buy-sell-cards__forms">
                  <div class="d-block forms-purchase__box">
                    <div class="forms-purchase">
                      <div class="forms-group forms-group--value">
                        <input type="number" min="0" value="4000" class="form-control forms-purchase__value">
                      </div>
                      <div class="forms-purchase__line"></div>
                      <div class="forms-group forms-group--purchase js-forms-group--purchase" id="custom-select3">
                        <div class="forms-group__items selected" data-selected="usd">
                          <img class="fg-items__icon" src="./assets/media/images/icons/usd.svg" alt="">
                          <p class="fg-items__value">USD</p>
                        </div>
                        <img class="forms-currency__icon-arrow-down" src="./assets/media/images/icons/arrow-down.svg" alt="">
                        <div class="forms-group__dropdown js-forms-group__dropdown">
                          <div class="forms-group__items active" data-selected="usd">
                            <img class="fg-items__icon" src="./assets/media/images/icons/usd.svg" alt="">
                            <p class="fg-items__value">USD</p>
                          </div>
                          <div class="forms-group__items" data-selected="btc">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-btc.svg" alt="">
                            <p class="fg-items__value">BTC</p>
                          </div>
                          <div class="forms-group__items" data-selected="eth">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-eth.svg" alt="">
                            <p class="fg-items__value">ETH</p>
                          </div>
                          <div class="forms-group__items" data-selected="bnb">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-bnb.svg" alt="">
                            <p class="fg-items__value">BNB</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-block forms-purchase__box">
                    <div class="forms-purchase">
                      <div class="forms-group forms-group--value">
                        <input type="number" min="0" value="0.074153" class="form-control forms-purchase__value">
                      </div>
                      <div class="forms-purchase__line"></div>
                      <div class="forms-group forms-group--purchase js-forms-group--purchase" id="custom-select4">
                        <div class="forms-group__items selected" data-selected="btc">
                          <img class="fg-items__icon" src="./assets/media/images/icons/logo-btc.svg" alt="">
                          <p class="fg-items__value">BTC</p>
                        </div>
                        <img class="forms-currency__icon-arrow-down" src="./assets/media/images/icons/arrow-down.svg" alt="">
                        <div class="forms-group__dropdown js-forms-group__dropdown">
                          <div class="forms-group__items active" data-selected="btc">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-btc.svg" alt="">
                            <p class="fg-items__value">BTC</p>
                          </div>
                          <div class="forms-group__items" data-selected="usd">
                            <img class="fg-items__icon" src="./assets/media/images/icons/usd.svg" alt="">
                            <p class="fg-items__value">USD</p>
                          </div>
                          <div class="forms-group__items" data-selected="eth">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-eth.svg" alt="">
                            <p class="fg-items__value">ETH</p>
                          </div>
                          <div class="forms-group__items" data-selected="bnb">
                            <img class="fg-items__icon" src="./assets/media/images/icons/logo-bnb.svg" alt="">
                            <p class="fg-items__value">BNB</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-lg btn-pill">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End::Exchange / Buy Sell Section -->
  
  <!-- Start::Why Choose Us Section -->
  <section class="why-choose-us why-choose-us--v2">
    <div class="why-choose-us__background why-choose-us__background--pattern">
      <img class="why-choose-us__pattern-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-why-choose-us-pattern.png" alt="Background Pattern why-choose-us" />
    </div>
    <div class="why-choose-us__background--mobile why-choose-us__background--pattern">
      <img class="why-choose-us__pattern-bg" src="./assets/media/images/landing-page-v2/mobile-landing-page-v2-why-choose-us-pattern.png" alt="Background Pattern Why Choose Us" />
    </div>
    <div class="container">
      <div class="why-choose-us__container">
        <img class="why-choose-us__illustration" data-aos="zoom-in-up" data-aos-delay="300" src="./assets/media/images/landing-page-v2/landing-page-v2-why-choose-us-illustration.svg" alt="">
        <div class="why-choose-us__content">
          <h2 class="why-choose-us__title" data-aos="fade-up">We are the most trusted cryptocurrency platform.</h2>
          <p class="fb-regular why-choose-us__subtitle" data-aos="fade-up" data-aos-delay="100">We believe Cryptolly is here to stay — and that a future worth building is one which opens its doors and invites everyone in.</p>
          <div class="why-choose-us__groups">
            <div class="why-choose-us__items" data-aos="fade-right" data-aos-delay="400">
              <div class="why-choose-us-items__header">
                <img class="why-choose-us-items__icon" src="./assets/media/images/icons/eyes.svg" alt="Clarity" />
              </div>
              <div class="why-choose-us-items__content">
                <h5 class="why-choose-us-item__title">Clarity</h5>
                <p class="fb-regular why-choose-us-item__desc">
                  We help you make sense of the coins, the terms, the dense charts and market changes.
                </p>
              </div>
            </div>
            <div class="why-choose-us__items" data-aos="fade-right" data-aos-delay="500">
              <div class="why-choose-us-items__header">
                <img class="why-choose-us-items__icon" src="./assets/media/images/icons/shield-done.svg" alt="Confidence" />
              </div>
              <div class="why-choose-us-items__content">
                <h5 class="why-choose-us-item__title">Confidence</h5>
                <p class="fb-regular why-choose-us-item__desc">
                  Our markets are always up to date, sparking curiosity with <br>real-world relevance.
                </p>
              </div>
            </div>
            <div class="why-choose-us__items" data-aos="fade-right" data-aos-delay="600">
              <div class="why-choose-us-items__header">
                <img class="why-choose-us-items__icon" src="./assets/media/images/icons/community.svg" alt="Community" />
              </div>
              <div class="why-choose-us-items__content">
                <h5 class="why-choose-us-item__title">Community</h5>
                <p class="fb-regular why-choose-us-item__desc">
                  We supports the crypto community, putting data in the hands which need it most.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End::Why Choose Us Section -->
  
  
  <!-- Start::Testimonials Section -->
  <section class="testimonial testimonial--v2">
    <div class="container">
      <div class="testimonial__container">
  
        <h2 class="testimonial__title--mobile" data-aos="fade-up">What media says about Cryptolly?</h2>
        <div class="testimonial-carousel__container">
          <h2 class="testimonial__title" data-aos="fade-up">What media says about Cryptolly?</h2>
          <div class="testimonial-carousel__box" data-aos="fade-right" data-aos-delay="200">
            <div class="testimonial-carousel">
              <div data-slick-title="Neweeks" data-slick-number="1" class="testimonial-carousel__items">
                <p class="fd-md testimonial-carousel__detail">“Derivative exchange America-based Cryptolly believes they will continue to grow in 2020.”</p>
                <p class="fb-lg fb-lg--bold testimonial-carousel__author">Neweeks, 2020</p>
              </div>
              <div data-slick-title="Fores" data-slick-number="1" class="testimonial-carousel__items">
                <p class="fd-md testimonial-carousel__detail">“Derivative exchange America-based Cryptolly believes they will continue to grow in 2020.”</p>
                <p class="fb-lg fb-lg--bold testimonial-carousel__author">Fores, 2020</p>
              </div>
              <div data-slick-title="MetroNew" data-slick-number="1" class="testimonial-carousel__items">
                <p class="fd-md testimonial-carousel__detail">“Derivative exchange America-based Cryptolly believes they will continue to grow in 2020.”</p>
                <p class="fb-lg fb-lg--bold testimonial-carousel__author">MetroNew, 2020</p>
              </div>
              <div data-slick-title="EuroNew" data-slick-number="1" class="testimonial-carousel__items">
                <p class="fd-md testimonial-carousel__detail">“Derivative exchange America-based Cryptolly believes they will continue to grow in 2020.”</p>
                <p class="fb-lg fb-lg--bold testimonial-carousel__author">EuroNew, 2020</p>
              </div>
            </div>
            <div class="slick__pagination">
              <div class="testimonial-carousel__arrows">
                <a href="#" class="testimonial-carousel__prev">
                  <img src="./assets/media/images/icons/arrow-circle-left.svg" alt="Previous">
                </a>
                <a href="#" class="testimonial-carousel__next">
                  <img src="./assets/media/images/icons/arrow-circle-right.svg" alt="Next">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial-media" data-aos="zoom-in-up" data-aos-delay="300">
          <div class="testimonial-media__items active">
            <p class="testimonial-media__items-title">Neweeks</p>
          </div>
          <div class="testimonial-media__items next">
            <p class="testimonial-media__items-title">Fores</p>
          </div>
          <div class="testimonial-media__items next-2">
            <p class="testimonial-media__items-title">MetroNew</p>
          </div>
          <div class="testimonial-media__items prev">
            <p class="testimonial-media__items-title">EuroNew</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End::Testimonials Section -->
  
  <!-- Start::Mobile Platform Section -->
  <section class="mobile-platform mobile-platform--v2">
    <div class="mobile-platform__background mobile-platform__background--grid">
      <img class="mobile-platform__grid-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-hero-grid-bg.png" alt="Background Grid Mobile Platform" />
    </div>
    <div class="mobile-platform__background mobile-platform__background--pattern">
      <img class="mobile-platform__pattern-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-mobile-apps-pattern.png" alt="Background Pattern Mobile Platform" />
    </div>
    <div class="mobile-platform__background--mobile mobile-platform__background--grid">
      <img class="mobile-platform__grid-bg" src="./assets/media/images/landing-page-v2/mobile-landing-page-v2-hero-grid.png" alt="Background Grid Mobile Platform" />
    </div>
    <div class="mobile-platform__background--mobile mobile-platform__background--pattern">
      <img class="mobile-platform__pattern-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-mobile-apps-pattern.png" alt="Background Pattern Mobile Platform" />
    </div>
    <div class="container">
      <div class="mobile-platform__container">
        <div class="mobile-platform__illustration" data-aos="zoom-in-up" data-aos-delay="200">
          <img src="./assets/media/images/landing-page-v2/landing-page-v2-mobile-apps-illustration.svg" alt="Illustration">
        </div>
        <div class="mobile-platform__content">
          <h2 class="mobile-platform__title" data-aos="fade-up">Build your crypto portfolio anywhere.</h2>
          <p class="fb-regular mobile-platform__subtitle" data-aos="fade-up" data-aos-delay="100">A powerful cryptocurrency exchange in your pocket. Buy, sell and trade crypto on the go.</p>
        </div>
        <div class="mobile-platform__download">
          <p class="fb-regular fb-regular--bold" data-aos="fade-up">Get the Cryptolly Wallet Mobile App Now!</p>
          <div class="mobile-platform__download-button">
            <a href="#" class="btn btn-download-app btn-playstore" data-aos="fade-up" data-aos-delay="200">
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1166_375)">
                  <path d="M23.8517 21.3902C27.9092 19.3087 30.9851 17.7226 31.2502 17.5993C32.0984 17.1779 32.9742 16.0626 31.2502 15.1962C30.6936 14.9238 27.6967 13.3871 23.8517 11.4053L18.5215 16.4348L23.8517 21.3901V21.3902Z" fill="#FFD900" />
                  <path d="M18.521 16.4346L1.54883 32.4162C1.9472 32.4655 2.39695 32.3668 2.9272 32.0945C4.04045 31.5251 15.842 25.5037 23.8512 21.3912L18.521 16.4346Z" fill="#F43249" />
                  <path d="M18.5219 16.4351L23.8522 11.4303C23.8522 11.4303 4.12194 1.37006 2.92819 0.776189C2.47844 0.527313 1.97444 0.453386 1.52344 0.527313L18.5219 16.4351Z" fill="#00EE76" />
                  <path d="M18.5214 16.437L1.52287 0.529297C0.833 0.678319 0.25 1.24778 0.25 2.41239V30.5356C0.25 31.6015 0.701125 32.3693 1.54925 32.4433L18.5214 16.437Z" fill="#00D3FF" />
                </g>
                <defs>
                  <clipPath id="clip0_1166_375">
                    <rect width="32" height="32" fill="white" transform="translate(0.25 0.5)" />
                  </clipPath>
                </defs>
              </svg>
              <div class="btn-download-app__content">
                <p class="btn-download-app__subtitle">GET IT ON</p>
                <p class="btn-download-app__title">Google Play</p>
              </div>
            </a>
            <a href="#" class="btn btn-download-app btn-appstore" data-aos="fade-up" data-aos-delay="200">
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1166_319)">
                  <path d="M7.758 0.5H25.742C29.6125 0.5 32.75 3.6375 32.75 7.508V25.492C32.75 29.3625 29.6125 32.5 25.742 32.5H7.758C3.8875 32.5 0.75 29.3625 0.75 25.492V7.508C0.75 3.6375 3.8875 0.5 7.758 0.5Z" fill="url(#paint0_linear_1166_319)" />
                  <path d="M11.0045 23.7266L11.0075 23.7276L9.91333 25.6226C9.51395 26.3143 8.62945 26.5513 7.9377 26.152C7.24608 25.7526 7.00895 24.8681 7.40833 24.1763L8.21433 22.7803L8.2917 22.6463C8.42983 22.4478 8.7707 22.1051 9.45258 22.1696C9.45258 22.1696 11.0572 22.3437 11.1733 23.1777C11.1733 23.1777 11.1891 23.4521 11.0045 23.7266ZM26.5223 18.8866H23.1106C22.8782 18.871 22.7768 18.788 22.7368 18.7397L22.7343 18.7353L19.0822 12.4096L19.0775 12.4127L18.8585 12.0987C18.4995 11.5497 17.9295 12.9537 17.9295 12.9537C17.2488 14.5182 18.0261 16.2968 18.297 16.8345L23.3697 25.6207C23.769 26.3123 24.6535 26.5495 25.3453 26.15C26.037 25.7506 26.2741 24.8661 25.8746 24.1743L24.6062 21.9773C24.5816 21.9241 24.5388 21.7796 24.799 21.779H26.5223C27.3211 21.779 27.9686 21.1315 27.9686 20.3327C27.9686 19.534 27.3211 18.8865 26.5223 18.8865V18.8866ZM19.8956 20.8526C19.8956 20.8526 20.0777 21.779 19.3731 21.779H6.7607C5.96195 21.779 5.31445 21.1315 5.31445 20.3327C5.31445 19.534 5.96195 18.8865 6.7607 18.8865H10.0032C10.5267 18.8562 10.6507 18.554 10.6507 18.554L10.6537 18.5555L14.8862 11.2245L14.885 11.2242C14.9621 11.0826 14.8978 10.9487 14.8867 10.9276L13.4888 8.50645C13.0895 7.81483 13.3265 6.9302 14.0182 6.53095C14.71 6.13158 15.5945 6.36845 15.9938 7.0602L16.6421 8.18308L17.2892 7.0622C17.6886 6.37058 18.5731 6.13345 19.2648 6.53295C19.9566 6.93233 20.1936 7.8167 19.7942 8.50845L13.9045 18.7097C13.8787 18.7718 13.8708 18.8693 14.0625 18.8865H17.583L17.5837 18.9208C17.5837 18.9208 19.6185 18.9525 19.8956 20.8526Z" fill="white" />
                </g>
                <defs>
                  <linearGradient id="paint0_linear_1166_319" x1="16.75" y1="0.5" x2="16.75" y2="32.5" gradientUnits="userSpaceOnUse">
                    <stop offset="1" stop-color="#17C9FB" />
                    <stop offset="1" stop-color="#1A74E8" />
                  </linearGradient>
                  <clipPath id="clip0_1166_319">
                    <rect width="32" height="32" fill="white" transform="translate(0.75 0.5)" />
                  </clipPath>
                </defs>
              </svg>
              <div class="btn-download-app__content">
                <p class="btn-download-app__subtitle">Download on the</p>
                <p class="btn-download-app__title">App Store</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End::Mobile Platform Section -->
  
  <!-- Start::CTA -->
  <section class="cta" data-aos="zoom-in-up">
    <div class="cta__background cta__background--pattern">
      <img class="cta__pattern-bg" src="./assets/media/images/landing-page-v2/landing-page-v2-cta-pattern.png" alt="Background Pattern CTA" />
    </div>
    <div class="cta__background--mobile cta__background--pattern">
      <img class="cta__pattern-bg" src="./assets/media/images/landing-page-v2/mobile-landing-page-v2-cta-pattern.png" alt="Background Pattern CTA" />
    </div>
    <div class="container">
      <div class="cta__container text-center">
        <p class="fd-sm cta__subtitle">Ready to start trading cryptocurrency?</p>
        <h3 class="cta__title">New users can earn up to $80 in crypto rewards.</h3>
        <form class="mini-form">
          <input type="text" class="form-control mini-form__input" placeholder="Enter you email address" autocomplete="off">
          <input type="submit" class="btn btn-primary mini-form__submit" value="Get Started">
        </form>
      </div>
    </div>
  </section>
  <!-- End::CTA -->
  <!-- Start::Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer__content">
        <div class="footer__item footer-item-main" data-aos="fade-up">
          <img class="footer-item-main__logo" src="./assets/media/images/logo-full.png" alt="Cryptolly" />
          <p class="fb-lg footer-item-main__desc">Your best crypto partner.</p>
          <div class="footer-item-main__socmed">
            <a href="#" class="footer-socmed">
              <img class="footer-item-main__logo" src="./assets/media/images/icons/logo-linkedin.svg" alt="Linkedin" />
            </a>
            <a href="#" class="footer-socmed">
              <img class="footer-item-main__logo" src="./assets/media/images/icons/logo-facebook.svg" alt="Facebook" />
            </a>
            <a href="#" class="footer-socmed">
              <img class="footer-item-main__logo" src="./assets/media/images/icons/logo-ig.svg" alt="Instagram" />
            </a>
          </div>
        </div>
        <div class="footer__item footer-item-quick-links" data-aos="fade-up" data-aos-delay="100">
          <h6 class="footer__item-title">Pages</h6>
          <div class="footer-quick-links">
            <a href="landing-page-v1.html" class="fb-md footer-quick-links__link">Landing Page v1</a>
            <a href="landing-page-v2.html" class="fb-md footer-quick-links__link">Landing Page v2</a>
            <a href="landing-page-v3.html" class="fb-md footer-quick-links__link">Landing Page v3</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/dashboard-v1.html" class="fb-md footer-quick-links__link">Dashboard v1</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/dashboard-v2.html" class="fb-md footer-quick-links__link">Dashboard v2</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/exchange-v1.html" class="fb-md footer-quick-links__link">Exchange v1</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/exchange-v2.html" class="fb-md footer-quick-links__link">Exchange v2</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/wallet-v1.html" class="fb-md footer-quick-links__link">Wallet v1</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/wallet-v2.html" class="fb-md footer-quick-links__link">Wallet v2</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/market-v1.html" class="fb-md footer-quick-links__link">Market v1</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/market-v2.html" class="fb-md footer-quick-links__link">Market v2</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/profile-v1.html" class="fb-md footer-quick-links__link">Profile Settings v1</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/profile-v2.html" class="fb-md footer-quick-links__link">Profile Settings v2</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/sign-in-v1.html" class="fb-md footer-quick-links__link">Sign In v1</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/sign-in-v2.html" class="fb-md footer-quick-links__link">Sign In v2</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/sign-up-v1.html" class="fb-md footer-quick-links__link">Sign Up v1</a>
            <a href="https://dhuhacreative.illustraly.com/cryptolly/dashboard/sign-up-v2.html" class="fb-md footer-quick-links__link">Sign Up v2</a>
          </div>
        </div>
        <div class="footer__item footer-item-updates" data-aos="fade-up" data-aos-delay="200">
          <h6 class="footer__item-title">Submit for updates.</h6>
          <p class="fb-md footer-item-updates__desc">Subscribe to get update and notify our exchange and products</p>
          <div class="mini-form-sm__box">
            <form class="mini-form">
              <input type="text" class="form-control form-control-sm mini-form__input" placeholder="Enter you email address" autocomplete="off">
              <input type="submit" class="btn btn-primary btn-sm mini-form__submit" value="Send">
            </form>
          </div>
        </div>
      </div>
      <div class="footer__foot" data-aos="fade-up" data-aos-delay="300">
        <p class="fb-md footer-foot__copyright">Cryptolly ©. All rights reserved.</p>
        <div class="footer-foot__tos-privacy">
          <a href="#" class="fb-md footer-foot__link">Term of Service</a>
          <span class="separator"></span>
          <a href="#" class="fb-md footer-foot__link">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End::Footer -->

  <!-- Start::Global Bundle Scripts (used by all pages) -->
  <script src="./assets/js/scripts.bundle.js"></script>
  <!-- End::Global Bundle Scripts -->
  <!-- Start::Plugins (used by this page) -->
  <script src="./assets/plugins/slick/slick.min.js"></script>
  <script src="./assets/plugins/aos-master/src/aos.js"></script>
  <script src="./assets/plugins/apexcharts/apexcharts.min.js"></script>
  <!-- End::Plugins -->
  <!-- Start::Page Scripts (used by this page) -->
  <script src="./assets/js/custom/custom-select.js"></script>
  <script src="./assets/js/pages/landing-page-v2.js"></script>
  <script src="./assets/js/custom/chart.js"></script>
  <!-- End::Page Scripts -->
</body>
</html>