PGDMP         
                 x            skripsi    10.11    10.11 Q    ]           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            ^           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            _           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            `           1262    16393    skripsi    DATABASE     �   CREATE DATABASE skripsi WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE skripsi;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            a           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            b           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16396    database    TABLE        CREATE TABLE public.database (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    id_sim bigint,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.database;
       public         postgres    false    3            �            1259    16394    database_id_seq    SEQUENCE     x   CREATE SEQUENCE public.database_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.database_id_seq;
       public       postgres    false    3    197            c           0    0    database_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.database_id_seq OWNED BY public.database.id;
            public       postgres    false    196            �            1259    16406    download    TABLE     �   CREATE TABLE public.download (
    id bigint NOT NULL,
    name character varying(255),
    file text,
    id_table bigint,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.download;
       public         postgres    false    3            �            1259    16404    download_id_seq    SEQUENCE     x   CREATE SEQUENCE public.download_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.download_id_seq;
       public       postgres    false    199    3            d           0    0    download_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.download_id_seq OWNED BY public.download.id;
            public       postgres    false    198            �            1259    16418 	   isi_table    TABLE     s  CREATE TABLE public.isi_table (
    id bigint NOT NULL,
    attribute text,
    definisi text,
    standard_acuan text,
    keterangan text,
    jenis_data text,
    relasi text,
    id_table bigint,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    kodifikasi text,
    sinonim text,
    jenis_table text
);
    DROP TABLE public.isi_table;
       public         postgres    false    3            �            1259    16416    isi_table_id_seq    SEQUENCE     y   CREATE SEQUENCE public.isi_table_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.isi_table_id_seq;
       public       postgres    false    3    201            e           0    0    isi_table_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.isi_table_id_seq OWNED BY public.isi_table.id;
            public       postgres    false    200            �            1259    16484    menu    TABLE     �   CREATE TABLE public.menu (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.menu;
       public         postgres    false    3            �            1259    16482    menu_id_seq    SEQUENCE     t   CREATE SEQUENCE public.menu_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.menu_id_seq;
       public       postgres    false    3    213            f           0    0    menu_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.menu_id_seq OWNED BY public.menu.id;
            public       postgres    false    212            �            1259    16430 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id bigint NOT NULL,
    migration character varying(255) DEFAULT ''::character varying NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false    3            �            1259    16428    migrations_id_seq    SEQUENCE     z   CREATE SEQUENCE public.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    203    3            g           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
            public       postgres    false    202            �            1259    16440    role    TABLE     �   CREATE TABLE public.role (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    id_user bigint
);
    DROP TABLE public.role;
       public         postgres    false    3            �            1259    16438    role_id_seq    SEQUENCE     t   CREATE SEQUENCE public.role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.role_id_seq;
       public       postgres    false    205    3            h           0    0    role_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.role_id_seq OWNED BY public.role.id;
            public       postgres    false    204            �            1259    16498 	   role_user    TABLE       CREATE TABLE public.role_user (
    id bigint NOT NULL,
    id_database bigint,
    id_role bigint,
    id_table bigint,
    id_sim bigint,
    permission character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.role_user;
       public         postgres    false    3            �            1259    16496    role_user_id_seq    SEQUENCE     y   CREATE SEQUENCE public.role_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.role_user_id_seq;
       public       postgres    false    215    3            i           0    0    role_user_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.role_user_id_seq OWNED BY public.role_user.id;
            public       postgres    false    214            �            1259    16450    sim    TABLE     �   CREATE TABLE public.sim (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.sim;
       public         postgres    false    3            �            1259    16448 
   sim_id_seq    SEQUENCE     s   CREATE SEQUENCE public.sim_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.sim_id_seq;
       public       postgres    false    207    3            j           0    0 
   sim_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.sim_id_seq OWNED BY public.sim.id;
            public       postgres    false    206            �            1259    16460    table    TABLE       CREATE TABLE public."table" (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    id_database bigint,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public."table";
       public         postgres    false    3            �            1259    16458    table_id_seq    SEQUENCE     u   CREATE SEQUENCE public.table_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.table_id_seq;
       public       postgres    false    209    3            k           0    0    table_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.table_id_seq OWNED BY public."table".id;
            public       postgres    false    208            �            1259    16470    user    TABLE     �  CREATE TABLE public."user" (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    id_role bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    id_user bigint,
    email character varying(255),
    password character varying(255) DEFAULT ''::character varying NOT NULL,
    remember_token character varying(100)
);
    DROP TABLE public."user";
       public         postgres    false    3            �            1259    16468    user_id_seq    SEQUENCE     t   CREATE SEQUENCE public.user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.user_id_seq;
       public       postgres    false    3    211            l           0    0    user_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;
            public       postgres    false    210            �
           2604    16399    database id    DEFAULT     j   ALTER TABLE ONLY public.database ALTER COLUMN id SET DEFAULT nextval('public.database_id_seq'::regclass);
 :   ALTER TABLE public.database ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    196    197    197            �
           2604    16409    download id    DEFAULT     j   ALTER TABLE ONLY public.download ALTER COLUMN id SET DEFAULT nextval('public.download_id_seq'::regclass);
 :   ALTER TABLE public.download ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    198    199    199            �
           2604    16421    isi_table id    DEFAULT     l   ALTER TABLE ONLY public.isi_table ALTER COLUMN id SET DEFAULT nextval('public.isi_table_id_seq'::regclass);
 ;   ALTER TABLE public.isi_table ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    201    200    201            �
           2604    16487    menu id    DEFAULT     b   ALTER TABLE ONLY public.menu ALTER COLUMN id SET DEFAULT nextval('public.menu_id_seq'::regclass);
 6   ALTER TABLE public.menu ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    212    213    213            �
           2604    16433    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    202    203    203            �
           2604    16443    role id    DEFAULT     b   ALTER TABLE ONLY public.role ALTER COLUMN id SET DEFAULT nextval('public.role_id_seq'::regclass);
 6   ALTER TABLE public.role ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    205    204    205            �
           2604    16501    role_user id    DEFAULT     l   ALTER TABLE ONLY public.role_user ALTER COLUMN id SET DEFAULT nextval('public.role_user_id_seq'::regclass);
 ;   ALTER TABLE public.role_user ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    215    214    215            �
           2604    16453    sim id    DEFAULT     `   ALTER TABLE ONLY public.sim ALTER COLUMN id SET DEFAULT nextval('public.sim_id_seq'::regclass);
 5   ALTER TABLE public.sim ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    206    207    207            �
           2604    16463    table id    DEFAULT     f   ALTER TABLE ONLY public."table" ALTER COLUMN id SET DEFAULT nextval('public.table_id_seq'::regclass);
 9   ALTER TABLE public."table" ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    209    208    209            �
           2604    16473    user id    DEFAULT     d   ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);
 8   ALTER TABLE public."user" ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    210    211    211            H          0    16396    database 
   TABLE DATA               U   COPY public.database (id, name, id_sim, id_user, created_at, updated_at) FROM stdin;
    public       postgres    false    197   V       J          0    16406    download 
   TABLE DATA               ]   COPY public.download (id, name, file, id_table, id_user, created_at, updated_at) FROM stdin;
    public       postgres    false    199   �V       L          0    16418 	   isi_table 
   TABLE DATA               �   COPY public.isi_table (id, attribute, definisi, standard_acuan, keterangan, jenis_data, relasi, id_table, id_user, created_at, updated_at, kodifikasi, sinonim, jenis_table) FROM stdin;
    public       postgres    false    201   �V       X          0    16484    menu 
   TABLE DATA               @   COPY public.menu (id, name, created_at, updated_at) FROM stdin;
    public       postgres    false    213   �V       N          0    16430 
   migrations 
   TABLE DATA               :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       postgres    false    203   �V       P          0    16440    role 
   TABLE DATA               I   COPY public.role (id, name, created_at, updated_at, id_user) FROM stdin;
    public       postgres    false    205   �W       Z          0    16498 	   role_user 
   TABLE DATA               s   COPY public.role_user (id, id_database, id_role, id_table, id_sim, permission, created_at, updated_at) FROM stdin;
    public       postgres    false    215   MX       R          0    16450    sim 
   TABLE DATA               H   COPY public.sim (id, name, id_user, created_at, updated_at) FROM stdin;
    public       postgres    false    207   jX       T          0    16460    table 
   TABLE DATA               Y   COPY public."table" (id, name, id_database, id_user, created_at, updated_at) FROM stdin;
    public       postgres    false    209   �X       V          0    16470    user 
   TABLE DATA               u   COPY public."user" (id, name, id_role, created_at, updated_at, id_user, email, password, remember_token) FROM stdin;
    public       postgres    false    211   mY       m           0    0    database_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.database_id_seq', 7, true);
            public       postgres    false    196            n           0    0    download_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.download_id_seq', 7, true);
            public       postgres    false    198            o           0    0    isi_table_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.isi_table_id_seq', 17, true);
            public       postgres    false    200            p           0    0    menu_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.menu_id_seq', 1, false);
            public       postgres    false    212            q           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 17, true);
            public       postgres    false    202            r           0    0    role_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.role_id_seq', 3, true);
            public       postgres    false    204            s           0    0    role_user_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.role_user_id_seq', 1, false);
            public       postgres    false    214            t           0    0 
   sim_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('public.sim_id_seq', 9, true);
            public       postgres    false    206            u           0    0    table_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.table_id_seq', 6, true);
            public       postgres    false    208            v           0    0    user_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.user_id_seq', 6, true);
            public       postgres    false    210            �
           2606    16403    database PRIMARY 
   CONSTRAINT     P   ALTER TABLE ONLY public.database
    ADD CONSTRAINT "PRIMARY" PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.database DROP CONSTRAINT "PRIMARY";
       public         postgres    false    197            �
           2606    16415    download PRIMARY00000 
   CONSTRAINT     U   ALTER TABLE ONLY public.download
    ADD CONSTRAINT "PRIMARY00000" PRIMARY KEY (id);
 A   ALTER TABLE ONLY public.download DROP CONSTRAINT "PRIMARY00000";
       public         postgres    false    199            �
           2606    16427    isi_table PRIMARY00001 
   CONSTRAINT     V   ALTER TABLE ONLY public.isi_table
    ADD CONSTRAINT "PRIMARY00001" PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.isi_table DROP CONSTRAINT "PRIMARY00001";
       public         postgres    false    201            �
           2606    16437    migrations PRIMARY00002 
   CONSTRAINT     W   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT "PRIMARY00002" PRIMARY KEY (id);
 C   ALTER TABLE ONLY public.migrations DROP CONSTRAINT "PRIMARY00002";
       public         postgres    false    203            �
           2606    16447    role PRIMARY00003 
   CONSTRAINT     Q   ALTER TABLE ONLY public.role
    ADD CONSTRAINT "PRIMARY00003" PRIMARY KEY (id);
 =   ALTER TABLE ONLY public.role DROP CONSTRAINT "PRIMARY00003";
       public         postgres    false    205            �
           2606    16457    sim PRIMARY00004 
   CONSTRAINT     P   ALTER TABLE ONLY public.sim
    ADD CONSTRAINT "PRIMARY00004" PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.sim DROP CONSTRAINT "PRIMARY00004";
       public         postgres    false    207            �
           2606    16467    table PRIMARY00005 
   CONSTRAINT     T   ALTER TABLE ONLY public."table"
    ADD CONSTRAINT "PRIMARY00005" PRIMARY KEY (id);
 @   ALTER TABLE ONLY public."table" DROP CONSTRAINT "PRIMARY00005";
       public         postgres    false    209            �
           2606    16481    user PRIMARY00006 
   CONSTRAINT     S   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT "PRIMARY00006" PRIMARY KEY (id);
 ?   ALTER TABLE ONLY public."user" DROP CONSTRAINT "PRIMARY00006";
       public         postgres    false    211            �
           2606    16489    menu menu_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.menu
    ADD CONSTRAINT menu_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.menu DROP CONSTRAINT menu_pkey;
       public         postgres    false    213            �
           2606    16503    role_user role_user_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.role_user
    ADD CONSTRAINT role_user_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.role_user DROP CONSTRAINT role_user_pkey;
       public         postgres    false    215            �
           1259    16495    fki_fk_database    INDEX     J   CREATE INDEX fki_fk_database ON public."table" USING btree (id_database);
 #   DROP INDEX public.fki_fk_database;
       public         postgres    false    209            �
           2606    16490    table fk_database    FK CONSTRAINT     �   ALTER TABLE ONLY public."table"
    ADD CONSTRAINT fk_database FOREIGN KEY (id_database) REFERENCES public.database(id) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 =   ALTER TABLE ONLY public."table" DROP CONSTRAINT fk_database;
       public       postgres    false    2745    197    209            w           0    0 !   CONSTRAINT fk_database ON "table"    COMMENT     =   COMMENT ON CONSTRAINT fk_database ON public."table" IS 'mm';
            public       postgres    false    2765            H   e   x�m�1
�0F�99E/�����BW�
"����QĮ<�н�;	)����+J�JW^�|��/x,ۛ}n)�w3צd�h�o�$G더�皙�`*�      J      x������ � �      L      x������ � �      X      x������ � �      N     x�]�Q�� ���a6-��l���&n�q"c���Q���W�i馐X���瓟%�W�5�%�+�S��R�!�����_g��J����ߔ��q������9s��$�;�/|��x8�:cuWGޝ��q����xߙ{aJ9Y���8wu������іk3}H�v@�b���8�qw�Z�Z��>f�H�Ҡ9�3���4�a�H��%�tny�v*=G�j:&/tL��u"���n{�ф{|�E* �H�-r3�j��� ����6      P   ?   x�3�,.-H-RHL����4202�50�54Q00�22�22�*��eĉU����9V1��=... ���      Z      x������ � �      R   |   x�m�;�@��z�{� {��&�xJQ��s� �"e�_��-�����&M&�I���hkh)NL�����^u�Ƣ	k�*�5x�+��n�Sܘp�0R|�b�k��V,�_d5��> ���J�      T   g   x�3�,IL�IU�NM�(��4�4�4202�50�54Q04�22�20�&�e�T�P���Z����L������gp�cp�#�9�&s��V&��ĸb���� /^%�      V     x�m�=s�0 ��9���z!	_NV���q]B@��@P~}ϭ�s}�� ���S��A2���M|��K�jƫL�c"�[�w�.��1m��C���F�?����� ����(����#k�v�0#$Z��S�����%a�����n�[]3����9�]	�?���SI^7��Iɲ��a9,:T:�Za{�G�@�qca������ыHۍ�ޏKӶ�Kc~�)¥��� �*Z����yj��j۟EPuXaT)��V�����c%|�A���k�     