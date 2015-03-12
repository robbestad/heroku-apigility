CREATE DATABASE "shopadmin" ENCODING='UTF8';
--
-- Name: products; Type: TABLE; Schema: public; Owner: svenardo; Tablespace:
--

CREATE TABLE products (
  id integer NOT NULL,
  name character varying(100),
  added_date timestamp with time zone
);


ALTER TABLE public.products OWNER TO svenardo;

--
-- Name: products_category; Type: TABLE; Schema: public; Owner: svenardo; Tablespace:
--

CREATE TABLE products_category (
  id integer NOT NULL,
  name character varying(25),
  image_url character varying(255)
);


ALTER TABLE public.products_category OWNER TO svenardo;

--
-- Name: products_category_id_seq; Type: SEQUENCE; Schema: public; Owner: svenardo
--

CREATE SEQUENCE products_category_id_seq
START WITH 1
INCREMENT BY 1
NO MINVALUE
NO MAXVALUE
CACHE 1;


ALTER TABLE public.products_category_id_seq OWNER TO svenardo;

--
-- Name: products_category_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: svenardo
--

ALTER SEQUENCE products_category_id_seq OWNED BY products_category.id;


--
-- Name: products_description; Type: TABLE; Schema: public; Owner: svenardo; Tablespace:
--

CREATE TABLE products_description (
  id integer,
  description text,
  category character varying(50),
  images text,
  data json
);


ALTER TABLE public.products_description OWNER TO svenardo;

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: svenardo
--

CREATE SEQUENCE products_id_seq
START WITH 1
INCREMENT BY 1
NO MINVALUE
NO MAXVALUE
CACHE 1;


ALTER TABLE public.products_id_seq OWNER TO svenardo;

--
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: svenardo
--

ALTER SEQUENCE products_id_seq OWNED BY products.id;


--
-- Name: products_images; Type: TABLE; Schema: public; Owner: svenardo; Tablespace:
--

CREATE TABLE products_images (
  id integer NOT NULL,
  product_id integer,
  image text
);


ALTER TABLE public.products_images OWNER TO svenardo;

--
-- Name: products_images_id_seq; Type: SEQUENCE; Schema: public; Owner: svenardo
--

CREATE SEQUENCE products_images_id_seq
START WITH 1
INCREMENT BY 1
NO MINVALUE
NO MAXVALUE
CACHE 1;


ALTER TABLE public.products_images_id_seq OWNER TO svenardo;

--
-- Name: products_images_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: svenardo
--

ALTER SEQUENCE products_images_id_seq OWNED BY products_images.id;


--
-- Name: sku; Type: TABLE; Schema: public; Owner: svenardo; Tablespace:
--

CREATE TABLE sku (
  id integer NOT NULL,
  product_id integer NOT NULL,
  price double precision,
  discounted double precision
);


ALTER TABLE public.sku OWNER TO svenardo;

--
-- Name: sku_id_seq; Type: SEQUENCE; Schema: public; Owner: svenardo
--

CREATE SEQUENCE sku_id_seq
START WITH 1
INCREMENT BY 1
NO MINVALUE
NO MAXVALUE
CACHE 1;


ALTER TABLE public.sku_id_seq OWNER TO svenardo;

--
-- Name: sku_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: svenardo
--

ALTER SEQUENCE sku_id_seq OWNED BY sku.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: svenardo
--

ALTER TABLE ONLY products ALTER COLUMN id SET DEFAULT nextval('products_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: svenardo
--

ALTER TABLE ONLY products_category ALTER COLUMN id SET DEFAULT nextval('products_category_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: svenardo
--

ALTER TABLE ONLY products_images ALTER COLUMN id SET DEFAULT nextval('products_images_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: svenardo
--

ALTER TABLE ONLY sku ALTER COLUMN id SET DEFAULT nextval('sku_id_seq'::regclass);


--
-- Name: products_description_id_key; Type: CONSTRAINT; Schema: public; Owner: svenardo; Tablespace:
--

ALTER TABLE ONLY products_description
ADD CONSTRAINT products_description_id_key UNIQUE (id);


--
-- Name: products_pkey; Type: CONSTRAINT; Schema: public; Owner: svenardo; Tablespace:
--

ALTER TABLE ONLY products
ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- Name: sku_pkey; Type: CONSTRAINT; Schema: public; Owner: svenardo; Tablespace:
--

ALTER TABLE ONLY sku
ADD CONSTRAINT sku_pkey PRIMARY KEY (id);


--
-- Name: products_images_product_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: svenardo
--

ALTER TABLE ONLY products_images
ADD CONSTRAINT products_images_product_id_fkey FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE;


--
-- Name: sku_product_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: svenardo
--

ALTER TABLE ONLY sku
ADD CONSTRAINT sku_product_id_fkey FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE;

