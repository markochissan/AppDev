#pragma comment(lib, "libcurl.lib")
#define _CRT_SECURE_NO_WARNINGS
#include <stdio.h>
#include <curl/curl.h>
#include "maxiumum.h"

int main(int argc, char* argv[]) {
    char poststring[200], nam[100], prj[100];
    printf("welcome to libcurl application");
    struct min_max data = maxmin();
    sprintf(poststring, "max = % d & min = % d", data.max, data.min);
    printf("max= %d,min=%d\n", data.max, data.min);
    CURL* req = curl_easy_init();
    CURLcode res;
    if (req) {
        curl_easy_setopt(req, CURLOPT_URL, "https://www.cc.puv.fi/~e2301472/echo.php");
        curl_easy_setopt(req, CURLOPT_POSTFIELDS, poststring);
        res = curl_easy_perform(req);
        if (res != CURLE_OK) {
            fprintf(stderr, "curl_easy_operation() failed : %s\n",curl_easy_strerror(res));
        }
    }
    curl_easy_cleanup(req);
    return 0; 
}
  