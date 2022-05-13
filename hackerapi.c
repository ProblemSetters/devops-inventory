#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <limits.h>

int main(void) {
  char* security_token;
  char hostname[HOST_NAME_MAX + 1];

  security_token = getenv("HACKERAPI_SECURITY_TOKEN");
  gethostname(hostname, HOST_NAME_MAX + 1);

  printf("%s@%s\n", security_token, hostname);

  return EXIT_SUCCESS;
}
