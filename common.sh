function benchmark() {
    CONTAINER=$(sudo docker run -d -P $1)

    sleep 1

    PORT=$(sudo docker port $CONTAINER 80 | sed 's/........//g')

    echo "-------" >> `pwd`/../results.txt
    echo "$2" >> `pwd`/../results.txt
    echo "-------" >> `pwd`/../results.txt
    ab -n 10000 -c 50 http://localhost:$PORT/ | grep -i 'Requests per second' | awk '{print $4}' >> `pwd`/../results.txt
    echo "" >> `pwd`/../results.txt

    echo 'Completed!'

    sudo docker kill $CONTAINER > /dev/null
    sudo docker rm $CONTAINER > /dev/null
}
