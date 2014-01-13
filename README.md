How to add another benchmark?
=============================

```
cp slim my-new-benchmark -r
cd my-new-benchmark

vim nginx.conf # edit away!
vim run # change the name of the image. e.g. 'mynewbenchmark'
vim build # change the name of the image. e.g. 'mynewbenchmark'
vim app.ini # edit away!

rm -rf ./app
mkdir ./app
# add your new application into ./app

vim Dockerfile # edit away!

./build
./run

# check ../results.txt for your results!
```
