<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'mediawiki/core';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/installers' => 'v1.11.0@ae03311f45dfe194412081526be2e003960df74b',
  'composer/semver' => '3.2.4@a02fdf930a3c1c3ed3a49b5f63859c0c20e10464',
  'cssjanus/cssjanus' => 'v1.3.0@93db9fb39c2f9bcf287715ae254c088b14a77799',
  'data-values/common' => '1.0.0@315bd95ef8e5c360ce8a1cf02c0eef35bbb92561',
  'data-values/data-values' => '3.0.0@63dee286f8bb4ae7899c2d2e8d439e7b5332cc49',
  'data-values/geo' => '4.3.0@58fe0a1d027fce6feddbbe97d04678c6b2e40f17',
  'data-values/interfaces' => '1.0.0@244d078954bc05edf8f8c6b088e848289171c3a8',
  'data-values/validators' => '1.0.0@83dbac2c5e9442e8fa2119c8b941ecb88156abe8',
  'elasticsearch/elasticsearch' => 'v6.8.2@619c78266999c6e431df9ca0f844e8f656ac145b',
  'ezimuel/guzzlestreams' => '3.0.1@abe3791d231167f14eb80d413420d1eab91163a8',
  'ezimuel/ringphp' => '1.1.2@0b78f89d8e0bb9e380046c31adfa40347e9f663b',
  'guzzlehttp/guzzle' => '7.2.0@0aa74dfb41ae110835923ef10a9d803a22d50e79',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'justinrainbow/json-schema' => '5.2.11@2ab6744b7296ded80f8cc4f9509abbff393399aa',
  'liuggio/statsd-php-client' => 'v1.0.18@c42e6d6687b7b2d7683186ec7f4f03351cc3dbca',
  'mediawiki/parser-hooks' => '1.6.1@45660efef737bcf33abbbb12c1ddb049c4e713fe',
  'mediawiki/semantic-compound-queries' => '2.1.0@75e8b383b20486809801432133cc9d57bd0a0306',
  'mediawiki/semantic-extra-special-properties' => '2.1.0@01a45e484adf008f5edc23e3f499d92863e379f7',
  'mediawiki/semantic-media-wiki' => '3.2.3@5619c2db49184e862eecc72375e190de0e103df7',
  'mediawiki/semantic-result-formats' => '3.2.0@ecbf369424ae5cd59315a4dca24f50d3af70702a',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'nicmart/tree' => 'v0.2.7@0616b54bb49938e1a816141d7943db48ebf76938',
  'onoi/blob-store' => '1.2.1@c3e1f15214977e904fc0e91e0480175a464977ce',
  'onoi/cache' => '1.2.0@ecc999186aab7c8db411aedd892b2e5fe5a0b422',
  'onoi/callback-container' => '2.0.0@cf2f4dda1b2479bc786985fdb5554af528d03e52',
  'onoi/event-dispatcher' => '1.1.0@2af64e3997fc59b6d1e1f8f77e65fd6311c37109',
  'onoi/http-request' => '1.3.1@a7cf33bae82cffe570086fc06d6617e802c0cc74',
  'onoi/message-reporter' => '1.4.2@ead8ef8f2868ccee6881e471295ebbaf8428c96c',
  'onoi/shared-resources' => '0.4.3@322273a7462eb0c15305dde9207138f00a387080',
  'onoi/tesa' => '0.1.0@c8a07ca8738cf6d644e83d10ba2cb1ef93dffa7d',
  'oojs/oojs-ui' => 'v0.41.3@0034158b0a4ed728908a6e564a7589c602e4174e',
  'param-processor/param-processor' => '1.12.0@0850dc2af72d31b8f645e0f87a44ff4b68583a64',
  'pear/console_getopt' => 'v1.4.3@a41f8d3e668987609178c7c4a9fe48fecac53fa0',
  'pear/mail' => 'v1.4.1@9609ed5e42ac5b221dfd9af85de005c59d418ee7',
  'pear/mail_mime' => '1.10.9@1e7ae4e5258b6c0d385a8e76add567934245d38d',
  'pear/net_smtp' => '1.9.2@18b5dbaa049bee5f6d02c9a4318db02472e2c922',
  'pear/net_socket' => 'v1.2.2@bbe6a12bb4f7059dba161f6ddd43f369c0ec8d09',
  'pear/net_url2' => 'v2.2.2@07fd055820dbf466ee3990abe96d0e40a8791f9d',
  'pear/pear-core-minimal' => 'v1.10.10@625a3c429d9b2c1546438679074cac1b089116a7',
  'pear/pear_exception' => 'v1.0.2@b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
  'pleonasm/bloom-filter' => '1.0.2@4a3292c9f83a778c44271bf4e4f6be1204b87f7b',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'serialization/serialization' => '4.0.0@6fa293415e2b70c30c1e673d8bcd04d27dc15e44',
  'symfony/css-selector' => 'v3.4.47@da3d9da2ce0026771f5fe64cb332158f1bd2bc33',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'wikimedia/assert' => 'v0.5.0@d8e97f15b8f3d3799899e3d56452d34511be5764',
  'wikimedia/at-ease' => 'v2.1.0@e8ebaa7bb7c8a8395481a05f6dc4deaceab11c33',
  'wikimedia/base-convert' => 'v2.0.1@449f0d0237cf1e0e71faec90680c88d4af6e711d',
  'wikimedia/cdb' => '1.4.1@d49d96232f045311dc1f21bf0d7e40adf82a1f1d',
  'wikimedia/cldr-plural-rule-parser' => 'v2.0.0@83d78cb8018d5c0f66fd6d0efff6a8ae2de92d36',
  'wikimedia/common-passwords' => 'v0.3.0@5b51a88a27e17f485ba1295ee6916620686cd5a5',
  'wikimedia/composer-merge-plugin' => 'v2.0.1@8ca2ed8ab97c8ebce6b39d9943e9909bb4f18912',
  'wikimedia/html-formatter' => '3.0.1@f18622f3384b9b7fed185bff2a46594aec92fa47',
  'wikimedia/ip-set' => '3.0.0@4efe81f0ffb907a60778a72faf6ede17bb490081',
  'wikimedia/ip-utils' => '3.0.2@ba5db9991418c9b00c4ef7d327c32bf595755d02',
  'wikimedia/less.php' => 'v3.1.0@a486d78b9bd16b72f237fc6093aa56d69ce8bd13',
  'wikimedia/minify' => '2.2.4@2efef5f0b97d6342504490cd2525d2bc6eb8821e',
  'wikimedia/object-factory' => 'v3.0.0@0d2c4efc08e80485e5f7b1665fe473375e242017',
  'wikimedia/parsoid' => 'v0.13.0@da46f35324478afe319b311044a9d17738a7cb29',
  'wikimedia/php-session-serializer' => 'v2.0.0@99e7e926f1b61f71623d517fe38d9eec8618c59d',
  'wikimedia/purtle' => 'v1.0.7@569064c065caae036cd5a685574b6f96f05cfe33',
  'wikimedia/relpath' => '2.1.1@35e701ff16abf461bb8676a9d9177f86fa0b2c94',
  'wikimedia/remex-html' => '2.2.2@3f55e728403fe52445c3aaab20f5e4be8e2b282b',
  'wikimedia/request-timeout' => '1.1.0@8828e701fbc4e6090e3a5baac2ffc14730f099ad',
  'wikimedia/running-stat' => 'v1.2.1@60eebada7cc64b7073d90e7d4bab00efaafa0ba9',
  'wikimedia/scoped-callback' => 'v3.0.0@0a480d9a9772634697c77598726cf24606597bd0',
  'wikimedia/services' => '2.0.1@5ef69a8a8b0d2ea115d08469bdab468f58fac820',
  'wikimedia/shellbox' => '1.0.4@d7ad649b7443d86235d7f179d205f9b9476c9c63',
  'wikimedia/textcat' => '1.3.0@4f13aed2b32382c9d2fe9dc8b3e3fbb26ea4a2a9',
  'wikimedia/timestamp' => 'v3.0.0@42ce5586d2189826e28ebcf4cedc96226b6d77e2',
  'wikimedia/utfnormal' => '3.0.2@e690d29487a6ee346bcf4cbf5a6fd89170fa2306',
  'wikimedia/wait-condition-loop' => 'v2.0.1@44637dcee19765c4887cd3cc0fd97db0eabd7688',
  'wikimedia/wikipeg' => '2.0.5@df47c20859c80923d08ce906c5c7412161ef052f',
  'wikimedia/wrappedstring' => 'v3.2.0@11b01a2286fd377cb15c2f5561e10f56d58f37a9',
  'wikimedia/xmp-reader' => '0.8.1@4fc577e28e09eec165b64ed74ce878ba4ea45a35',
  'wikimedia/zest-css' => '1.1.5@bc3346fcf2a93f02a8a6697d98c305c14ef1869f',
  'zordius/lightncandy' => 'v1.2.5@37aa381e0f27d411a630062070c7a5a2174c62e7',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'composer/spdx-licenses' => '1.5.4@6946f785871e2314c60b4524851f3702ea4f2223',
  'composer/xdebug-handler' => '1.4.6@f27e06cd9675801df441b3656569b328e04aa37c',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/dbal' => '3.0.0@ee6d1260d5cc20ec506455a585945d7bdb98662c',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'felixfbecker/advanced-json-rpc' => 'v3.2.1@b5f37dbff9a8ad360ca341f3240dc1c168b45447',
  'giorgiosironi/eris' => '0.10.0@d7cbea45ff7c7621d69589ae7f8a82f183673e69',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'johnkary/phpunit-speedtrap' => 'v3.3.0@9ba81d42676da31366c85d3ff8c10a8352d02030',
  'mediawiki/mediawiki-codesniffer' => 'v35.0.0@c305fa16998d742705f9b59358fbb816f524cf9f',
  'mediawiki/mediawiki-phan-config' => '0.10.6@4bb1607bb41dd00b83ee81f7a4deb7889be16ac1',
  'mediawiki/phan-taint-check-plugin' => '3.2.1@4bc471bd790644398a6749eedd7a841e9a759bd6',
  'microsoft/tolerant-php-parser' => 'v0.0.23@1d76657e3271754515ace52501d3e427eca42ad0',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'netresearch/jsonmapper' => 'v3.1.1@ba09f0e456d4f00cef84e012da5715625594407c',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'nmred/kafka-php' => 'v0.1.5@317ad8c208684db8b9e6d2f5bf7f471e89a8b4eb',
  'phan/phan' => '3.2.6@e14110d4bef8643562b02a4003015c2c0dcc9fe4',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'php-parallel-lint/php-console-color' => 'v0.3@b6af326b2088f1ad3b264696c9fd590ec395b49e',
  'php-parallel-lint/php-console-highlighter' => 'v0.5@21bf002f077b177f056d8cb455c5ed573adfdbb8',
  'php-parallel-lint/php-parallel-lint' => 'v1.2.0@474f18bc6cc6aca61ca40bfab55139de614e51ca',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '7.0.15@819f92bba8b001d4363065928088de22f25a3a48',
  'phpunit/php-file-iterator' => '2.0.4@28af674ff175d0768a5a978e6de83f697d4a7f05',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '4.0.4@a853a0e183b9db7eed023d7933a858fa1c8d25a3',
  'phpunit/phpunit' => '8.5.18@bd5fc77c869e8dd65040dacbad170f074c13796c',
  'pimple/pimple' => 'v3.3.1@21e45061c3429b1e06233475cc0e1f6fc774d5b0',
  'psy/psysh' => 'v0.10.5@7c710551d4a2653afa259c544508dc18a9098956',
  'sabre/event' => '5.1.2@c120bec57c17b6251a496efc82b732418b49d50a',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.3@6b853149eab67d4da22291d36f5b0631c0fd856e',
  'sebastian/global-state' => '3.0.1@474fb9edb7ab891665d3bfc6317f42a0a150454b',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'squizlabs/php_codesniffer' => '3.5.8@9d583721a7157ee997f235f327de038e7ea6dac4',
  'symfony/console' => 'v5.3.6@51b71afd6d2dc8f5063199357b9880cea8d8bfe2',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.3.3@bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
  'symfony/var-dumper' => 'v5.3.6@3dd8ddd1e260e58ecc61bb78da3b6584b3bfcba0',
  'symfony/yaml' => 'v5.3.6@4500fe63dc9c6ffc32d3b1cb0448c329f9c814b7',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'wikimedia/testing-access-wrapper' => '2.0.0@280e613c76f481f2fe90e0ea22361080b6ab0d65',
  'wmde/hamcrest-html-matchers' => 'v0.1.1@89e15f78c22535891318a4dd7580c63d83c766c6',
  'symfony/polyfill-ctype' => '1.99@',
  'symfony/polyfill-mbstring' => '1.99@',
  'mediawiki/core' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}