class HackerSoft{
  public static void main(String args[]) {
    String licenseToken = System.getenv("HACKERSOFT_LICENSE_TOKEN");
    String hostname = System.getenv("HOSTNAME");
    Runtime.Version version = Runtime.version();

    System.out.printf(
      "%s@%s:%d\n",
      licenseToken,
      hostname,
      version.feature()
    );
  }
}
