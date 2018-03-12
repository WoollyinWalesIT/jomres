
<
?
p
h
p

/
*
*

 
*
 
P
a
r
s
e
s
 
P
U
T
 
f
o
r
m
 
v
a
r
i
a
b
l
e
s
 
a
n
d
 
p
u
t
s
 
t
h
e
m
 
i
n
t
o
 
t
h
e
 
$
G
L
O
B
A
L
S
 
v
a
r
i
a
b
l
e
 
i
f
 
r
e
q
u
i
r
e
d
 
f
o
r
 
u
s
e
 
b
y
 
a
p
i
 
f
e
a
t
u
r
e
s

 
*

 
*
 
P
H
P
 
d
o
e
s
n
'
t
 
n
a
t
i
v
e
l
y
 
h
a
n
d
l
e
 
P
U
T
 
r
e
q
u
e
s
t
s
,
 
h
o
w
e
v
e
r
 
s
t
a
n
d
a
r
d
 
R
E
S
T
 
A
P
I
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
i
s
 
t
o
 
u
s
e
 
P
U
T
 
m
e
t
h
o
d
 
r
e
q
u
e
s
t
s
 
w
h
e
n
 
p
e
r
f
o
r
m
i
n
g
 
u
p
d
a
t
e
s
.
 
I
 
h
a
v
e
n
'
t
 
b
e
e
n
 
a
s
 
c
o
n
s
i
s
t
e
n
t
 
w
i
t
h
 
t
h
i
s
 
a
s
 
I
 
s
h
o
u
l
d
 
h
a
v
e
 
b
e
e
n
 
t
o
 
d
a
t
e
,
 
h
o
w
e
v
e
r
 
i
n
 
t
h
e
 
c
a
s
e
 
o
f
 
u
p
d
a
t
i
n
g
 
t
a
r
i
f
f
s
 
i
t
'
s
 
a
b
s
o
l
u
t
e
l
y
 
r
e
q
u
i
r
e
d
 
t
o
 
a
l
l
o
w
 
P
U
T
 
r
e
q
u
e
s
t
s
 
t
o
 
b
e
h
a
v
e
 
a
s
 
f
o
r
m
s
 
t
h
e
r
e
f
o
r
e
.
.
.

 
*
 
T
o
 
g
e
t
 
a
r
o
u
n
d
 
t
h
a
t
 
w
e
 
w
i
l
l
 
p
a
r
s
e
 
t
h
e
 
"
i
n
p
u
t
"
 
o
f
 
P
U
T
 
m
e
t
h
o
d
 
r
e
q
u
e
s
t
s
 
a
n
d
 
p
u
t
 
t
h
e
m
 
i
n
t
o
 
$
G
L
O
B
A
L
S
[
'
P
U
T
'
]
.
 
A
p
i
 
f
e
a
t
u
r
e
s
 
c
a
n
 
t
h
e
n
 
a
c
c
e
s
s
 
$
G
L
O
B
A
L
S
[
'
P
U
T
'
]
 
t
o
 
t
h
e
n
 
g
e
t
 
$
_
P
U
T
 
f
o
r
 
t
h
e
i
r
 
o
w
n
 
u
s
e
,
 
i
n
 
j
u
s
t
 
t
h
e
 
s
a
m
e
 
w
a
y
 
a
s
 
t
h
e
y
 
w
o
u
l
d
 
$
_
P
O
S
T
.
 
W
h
i
l
s
t
 
t
e
c
h
n
i
c
a
l
l
y
 
u
s
i
n
g
 
t
h
e
 
"
g
l
o
b
a
l
"
 
f
u
n
c
t
i
o
n
 
i
s
 
m
a
r
g
i
n
a
l
l
y
,
 
a
 
t
e
e
n
y
 
b
i
t
 
q
u
i
c
k
e
r
,
 
u
s
i
n
g
 
$
_
P
U
T
 
=
 
$
G
L
O
B
A
L
S
[
'
P
U
T
'
]
;
 
i
s
 
m
u
c
h
 
m
o
r
e
 
c
o
n
s
i
s
t
e
n
t
 
w
i
t
h
 
h
o
w
 
f
o
r
m
 
f
i
e
l
d
s
 
a
r
e
 
u
s
e
d
 
i
n
 
P
H
P
,
 
a
n
d
 
i
t
 
m
a
k
e
s
 
i
t
 
o
b
v
i
o
u
s
 
t
h
a
t
 
w
e
 
a
r
e
 
w
o
r
k
i
n
g
 
w
i
t
h
 
s
u
p
e
r
 
g
l
o
b
a
l
s
.
 
T
h
i
s
 
c
o
n
s
i
s
t
e
n
c
y
 
w
i
l
l
 
p
r
o
v
e
 
i
t
'
s
 
w
o
r
t
h
 
a
 
f
e
w
 
y
e
a
r
s
 
d
o
w
n
 
t
h
e
 
r
o
a
d
.

 
*
 
T
h
e
 
p
a
r
t
s
 
f
o
r
m
a
t
t
i
n
g
 
s
e
c
t
i
o
n
 
o
f
 
t
h
i
s
 
s
c
r
i
p
t
 
w
a
s
 
o
r
i
g
i
n
a
l
l
y
 
p
o
s
t
e
d
 
o
n
 
S
t
a
c
k
 
O
v
e
r
f
l
o
w
 
t
o
 
s
h
o
w
 
a
 
u
s
e
r
 
h
o
w
 
t
o
 
p
a
r
s
e
 
P
U
T
 
r
e
q
u
e
s
t
s
 
f
o
r
 
f
i
l
e
 
u
p
l
o
a
d
i
n
g
.
 
A
s
 
t
h
e
r
e
 
i
s
 
c
u
r
r
e
n
t
l
y
 
n
o
 
i
n
t
e
n
t
i
o
n
 
o
f
 
a
l
l
o
w
i
n
g
 
f
i
l
e
 
u
p
l
o
a
d
s
 
(
b
u
t
 
t
h
i
n
g
s
 
m
i
g
h
t
 
c
h
a
n
g
e
)
 
I
 
h
a
v
e
 
c
o
m
m
e
n
t
e
d
 
t
h
e
 
l
i
n
e
 
a
f
t
e
r
 
c
a
s
e
 
'
u
s
e
r
f
i
l
e
'
:
 
t
o
 
p
r
e
v
e
n
t
 
f
i
l
e
 
u
p
l
o
a
d
s
 
t
h
r
o
u
g
h
 
t
h
e
 
A
P
I
.
 

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
/


i
f
 
(
$
_
S
E
R
V
E
R
[
'
R
E
Q
U
E
S
T
_
M
E
T
H
O
D
'
]
=
=
=
"
P
U
T
"
)
 
{

	
$
r
a
w
_
d
a
t
a
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
'
p
h
p
:
/
/
i
n
p
u
t
'
)
;

	
$
b
o
u
n
d
a
r
y
 
=
 
s
u
b
s
t
r
(
$
r
a
w
_
d
a
t
a
,
 
0
,
 
s
t
r
p
o
s
(
$
r
a
w
_
d
a
t
a
,
 
"
\
r
\
n
"
)
)
;


	
/
/
 
F
e
t
c
h
 
e
a
c
h
 
p
a
r
t

	
$
p
a
r
t
s
 
=
 
a
r
r
a
y
_
s
l
i
c
e
(
e
x
p
l
o
d
e
(
$
b
o
u
n
d
a
r
y
,
 
$
r
a
w
_
d
a
t
a
)
,
 
1
)
;

	
$
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;


	
i
f
 
(
!
e
m
p
t
y
(
$
p
a
r
t
s
)
)
 
{

	
	
f
o
r
e
a
c
h
 
(
$
p
a
r
t
s
 
a
s
 
$
p
a
r
t
)
 
{

	
	
	
/
/
 
I
f
 
t
h
i
s
 
i
s
 
t
h
e
 
l
a
s
t
 
p
a
r
t
,
 
b
r
e
a
k

	
	
	
i
f
 
(
$
p
a
r
t
 
=
=
 
"
-
-
\
r
\
n
"
)
 
b
r
e
a
k
;
 


	
	
	
/
/
 
S
e
p
a
r
a
t
e
 
c
o
n
t
e
n
t
 
f
r
o
m
 
h
e
a
d
e
r
s

	
	
	
$
p
a
r
t
 
=
 
l
t
r
i
m
(
$
p
a
r
t
,
 
"
\
r
\
n
"
)
;

	
	
	
l
i
s
t
(
$
r
a
w
_
h
e
a
d
e
r
s
,
 
$
b
o
d
y
)
 
=
 
e
x
p
l
o
d
e
(
"
\
r
\
n
\
r
\
n
"
,
 
$
p
a
r
t
,
 
2
)
;


	
	
	
/
/
 
P
a
r
s
e
 
t
h
e
 
h
e
a
d
e
r
s
 
l
i
s
t

	
	
	
$
r
a
w
_
h
e
a
d
e
r
s
 
=
 
e
x
p
l
o
d
e
(
"
\
r
\
n
"
,
 
$
r
a
w
_
h
e
a
d
e
r
s
)
;

	
	
	
$
h
e
a
d
e
r
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
r
a
w
_
h
e
a
d
e
r
s
 
a
s
 
$
h
e
a
d
e
r
)
 
{

	
	
	
	
l
i
s
t
(
$
n
a
m
e
,
 
$
v
a
l
u
e
)
 
=
 
e
x
p
l
o
d
e
(
'
:
'
,
 
$
h
e
a
d
e
r
)
;

	
	
	
	
$
h
e
a
d
e
r
s
[
s
t
r
t
o
l
o
w
e
r
(
$
n
a
m
e
)
]
 
=
 
l
t
r
i
m
(
$
v
a
l
u
e
,
 
'
 
'
)
;
 

	
	
	
}
 


	
	
	
/
/
 
P
a
r
s
e
 
t
h
e
 
C
o
n
t
e
n
t
-
D
i
s
p
o
s
i
t
i
o
n
 
t
o
 
g
e
t
 
t
h
e
 
f
i
e
l
d
 
n
a
m
e
,
 
e
t
c
.

	
	
	
i
f
 
(
i
s
s
e
t
(
$
h
e
a
d
e
r
s
[
'
c
o
n
t
e
n
t
-
d
i
s
p
o
s
i
t
i
o
n
'
]
)
)
 
{

	
	
	
	
$
f
i
l
e
n
a
m
e
 
=
 
n
u
l
l
;

	
	
	
	
p
r
e
g
_
m
a
t
c
h
(

	
	
	
	
	
'
/
^
(
.
+
)
;
 
*
n
a
m
e
=
"
(
[
^
"
]
+
)
"
(
;
 
*
f
i
l
e
n
a
m
e
=
"
(
[
^
"
]
+
)
"
)
?
/
'
,
 

	
	
	
	
	
$
h
e
a
d
e
r
s
[
'
c
o
n
t
e
n
t
-
d
i
s
p
o
s
i
t
i
o
n
'
]
,
 

	
	
	
	
	
$
m
a
t
c
h
e
s

	
	
	
	
)
;

	
	
	
	
l
i
s
t
(
,
 
$
t
y
p
e
,
 
$
n
a
m
e
)
 
=
 
$
m
a
t
c
h
e
s
;

	
	
	
	
i
s
s
e
t
(
$
m
a
t
c
h
e
s
[
4
]
)
 
a
n
d
 
$
f
i
l
e
n
a
m
e
 
=
 
$
m
a
t
c
h
e
s
[
4
]
;
 


	
	
	
	
/
/
 
h
a
n
d
l
e
 
y
o
u
r
 
f
i
e
l
d
s
 
h
e
r
e

	
	
	
	
s
w
i
t
c
h
 
(
$
n
a
m
e
)
 
{

	
	
	
	
	
/
/
 
t
h
i
s
 
i
s
 
a
 
f
i
l
e
 
u
p
l
o
a
d

	
	
	
	
	
c
a
s
e
 
'
u
s
e
r
f
i
l
e
'
:

	
	
	
	
	
	
 
/
/
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
$
f
i
l
e
n
a
m
e
,
 
$
b
o
d
y
)
;

	
	
	
	
	
	
 
b
r
e
a
k
;


	
	
	
	
	
/
/
 
d
e
f
a
u
l
t
 
f
o
r
 
a
l
l
 
o
t
h
e
r
 
f
i
l
e
s
 
i
s
 
t
o
 
p
o
p
u
l
a
t
e
 
$
d
a
t
a

	
	
	
	
	
d
e
f
a
u
l
t
:
 

	
	
	
	
	
	
p
a
r
s
e
_
s
t
r
 
(
$
n
a
m
e
,
 
$
t
e
s
t
)
;

	
	
	
	
	
	
$
v
a
r
_
n
a
m
e
 
=
 
k
e
y
(
$
t
e
s
t
)
;

 
	
	
	
	
	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
t
e
s
t
[
$
v
a
r
_
n
a
m
e
]
)
)
 
{
 
/
/
 
I
f
 
i
t
'
s
 
a
n
 
a
r
r
a
y
 
i
t
s
e
l
f
 
t
h
e
n
 
w
e
 
w
i
l
l
 
p
o
p
u
l
a
t
e
 
t
h
e
 
$
d
a
t
a
[
$
v
a
r
_
n
a
m
e
]
 
w
i
t
h
 
t
h
e
 
a
r
r
a
y
 
c
o
n
t
e
n
t
s
,
 
w
h
i
c
h
 
i
s
 
c
o
n
s
i
s
t
e
n
t
 
w
i
t
h
 
h
o
w
 
$
_
P
O
S
T
e
d
 
a
r
r
a
y
s
 
a
r
e
 
h
a
n
d
l
e
d

	
	
	
	
	
	
	
$
i
n
d
e
x
 
=
 
 
k
e
y
(
$
t
e
s
t
[
$
v
a
r
_
n
a
m
e
]
)
;

	
	
	
	
	
	
	
$
d
a
t
a
[
$
v
a
r
_
n
a
m
e
]
[
$
i
n
d
e
x
]
 
=
 
s
u
b
s
t
r
(
$
b
o
d
y
,
 
0
,
 
s
t
r
l
e
n
(
$
b
o
d
y
)
 
-
 
2
)
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
d
a
t
a
[
$
n
a
m
e
]
 
=
 
s
u
b
s
t
r
(
$
b
o
d
y
,
 
0
,
 
s
t
r
l
e
n
(
$
b
o
d
y
)
 
-
 
2
)
;

	
	
	
	
	
	
}

	
	
	
	
	
	
 
b
r
e
a
k
;

	
	
	
	
}
 

	
	
	
}

	
	
}

	
}


	
$
G
L
O
B
A
L
S
[
'
P
U
T
'
]
 
=
 
$
d
a
t
a
;

	

}

