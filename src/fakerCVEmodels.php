<?php
namespace Faker\Provider;


class CVEData {

    protected static $cveId_models = array(
        'CVE-2019-1010318', 'CVE-2019-1010312', 'CVE-2019-1010311', 'CVE-2019-1010048',
        'CVE-2019-17601', '	CVE-2019-17602', 'CVE-2019-17594', 'CVE-2019-17593',
        'CVE-2019-17574', 'CVE-2019-17553', 'CVE-2019-17547', 'CVE-2019-17546',
        'CVE-2019-17543', 'CVE-2019-17539', 'CVE-2019-17537', 'CVE-2019-17536'
    );

    protected static $cveComplexity_models = array(
        'Low', 'High', 
    );

    protected static $cveAuthentication_models = array(
        'Single system', 'Not required'
    );

    protected static $cveConf_models = array(
        'Complete', 'Partial'
    );

    protected static $cveDescription_models = array(
        'WavPack 5.1.0 and earlier is affected by: CWE-457: Use of Uninitialized Variable. The impact is: Unexpected control flow, crashes, and segfaults. The component is: WavpackSetConfiguration64 (pack_utils.c:198). The attack vector is: Maliciously crafted .wav file. The fixed version is: After commit https://github.com/dbry/WavPack/commit/bc6cba3f552c44565f7f1e66dc1580189addb2b4.',
        'UPX 3.95 is affected by: Integer Overflow. The impact is: attacker can cause a denial of service. The component is: src/p_lx_elf.cpp PackLinuxElf32::PackLinuxElf32help1() Line 262. The attack vector is: the victim must open a specially crafted ELF file.',
        'couchcms 2 is affected by: Web Site physical path leakage. The impact is: disclosure the full path. The component is: includes/mysql2i/mysql2i.func.php and addons/phpmailer/phpmailer.php. The attack vector is: network connectivity.',
        'An issue was discovered in 74CMS v5.2.8. There is a SQL Injection generated by the _list method in the Common/Controller/BackendController.class.php file via the index.php?m=Admin&c=Ad&a=category sort parameter.'
    );

    protected static $cveAccess_models = array(
        'Local', 'Remote', 'Local Network'
    );

    protected static $cveVulnType_models = array(
        'DoS', 'XSS', 'Overflow', 'Code Execution', 'Code Execution Overflow', 'Http Response Splitting',
        'Bypass something', 'CSRF', 'File Inclusion', 
        'Directory traversal', 'Sql Injection', 'Memory Corruption', 'Gain Privileges', 'Gain Information'
    );

    public static function getCVEId() : array { return static::$cveId_models; }
    public static function getCVEComplexity() : array { return static::$cveComplexity_models; }
    public static function getCVEAuthentication() : array { return static::$cveAuthentication_models; }
    public static function getCVEConf() : array { return static::$cveConf_models; }
    public static function getCVEDescription() : array { return static::$cveDescription_models; }
    public static function getCVEAccess() : array { return static::$cveAccess_models; }
    public static function getCVEVulnType() : array { return static::$cveVulnType_models; }
}
?>