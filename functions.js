const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: [
        {
          title: "",
          author: "",
          poster: "",
          year: "",
          genre: "",
        },
      ],
    };
  },

  created() {
    this.getDisks();
  },

  methods: {
    getDisks() {
      axios
        .get("http://localhost/php-dischi-json/disk-list.php")
        .then((response) => {
          console.log(response.data);

          this.disks = response.data;
        });
    },
    getDiskDetails(index) {
      const postData = {
        params: {
          index,
        },
      };

      axios.get(this.apiUrl, postData).then((response) => {
        console.log(response.data);

        this.diskDetails = response.data;

        this.showDiskDetails = true;
      });
    },
  },
}).mount("#app");
