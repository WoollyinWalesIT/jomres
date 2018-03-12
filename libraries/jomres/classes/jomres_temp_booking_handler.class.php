
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
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
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{


 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
-
>
t
a
s
k
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
_
d
b
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
 
=
 
J
O
M
R
E
S
_
S
E
S
S
I
O
N
S
_
A
B
S
P
A
T
H
;

	
	
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
 
=
 
$
j
r
C
o
n
f
i
g
[
'
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
'
]
;


	
	
/
/
c
h
e
c
k
 
a
n
d
 
c
r
e
a
t
e
 
t
h
e
 
s
e
s
s
i
o
n
 
d
i
r
s
 
i
f
 
n
e
c
e
s
s
a
r
y

	
	
i
f
 
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
 
=
=
 
'
f
i
l
e
'
)
 
{

	
	
	
i
f
 
(
!
i
s
_
d
i
r
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
)
)
 
{

	
	
	
	
i
f
 
(
!
@
m
k
d
i
r
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
)
)
 
{

	
	
	
	
	
e
c
h
o
 
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
.
"
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
s
t
o
r
e
 
b
o
o
k
i
n
g
 
s
e
s
s
i
o
n
 
d
a
t
a
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
"
;

	
	
	
	
	
e
x
i
t
;

	
	
	
	
}

	
	
	
}

	
	
	

	
	
	
i
f
 
(
!
i
s
_
w
r
i
t
a
b
l
e
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
)
)
 
{

	
	
	
	
e
c
h
o
 
'
E
r
r
o
r
,
 
'
.
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
.
"
 
i
s
 
n
o
t
 
w
r
i
t
a
b
l
e
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
s
t
o
r
e
 
b
o
o
k
i
n
g
 
s
e
s
s
i
o
n
 
d
a
t
a
.
 
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
"
;

	
	
	
	
e
x
i
t
;

	
	
	
}

	
	
}

	
	

	
	
$
t
h
i
s
-
>
i
p
 
=
 
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
M
O
T
E
_
A
D
D
R
'
]
;

	
	

	
	
i
f
 
(
$
t
h
i
s
-
>
i
p
 
=
=
 
'
:
:
1
'
)
 
{

	
	
	
$
t
h
i
s
-
>
i
p
 
=
 
'
1
2
7
.
0
.
0
.
1
'
;

	
	
}


	
	
i
f
 
(
!
i
s
s
e
t
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
H
T
T
P
_
U
S
E
R
_
A
G
E
N
T
'
]
)
)
{

	
	
	
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
H
T
T
P
_
U
S
E
R
_
A
G
E
N
T
'
]
 
=
"
"
;

	
	
}

	
	

	
	
$
t
h
i
s
-
>
u
s
e
r
_
a
g
e
n
t
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
"
/
[
^
A
-
Z
a
-
z
0
-
9
[
:
s
p
a
c
e
:
]
]
/
"
,
 
"
"
,
 
s
t
r
i
p
_
t
a
g
s
(
t
r
i
m
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
H
T
T
P
_
U
S
E
R
_
A
G
E
N
T
'
]
)
)
)
;

	
	

	
	
/
/
i
n
i
t
 
a
r
r
a
y
s

	
	
$
t
h
i
s
-
>
_
i
n
i
t
(
)
;

	
}

	
	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
i
n
i
t
(
)

	
{

	
	
$
t
h
i
s
-
>
i
n
f
o
 
=
 
a
r
r
a
y
(

	
	
	
'
i
p
'
 
=
>
 
$
t
h
i
s
-
>
i
p
,

	
	
	
'
u
s
e
r
_
a
g
e
n
t
'
 
=
>
 
$
t
h
i
s
-
>
u
s
e
r
_
a
g
e
n
t

	
	
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
 
=
 
a
r
r
a
y
(

	
	
	
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
=
>
 
'
'
,

	
	
	
'
r
a
t
e
_
p
e
r
n
i
g
h
t
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
t
y
p
e
s
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
u
i
d
s
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
q
t
y
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
v
a
l
s
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
l
a
s
t
m
i
n
u
t
e
_
i
d
'
 
=
>
 
'
'
,

	
	
	
'
a
g
e
n
t
_
b
o
o
k
i
n
g
'
 
=
>
 
'
'
,

	
	
	
'
a
r
r
i
v
a
l
D
a
t
e
'
 
=
>
 
'
'
,

	
	
	
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
=
>
 
'
'
,

	
	
	
'
s
t
a
y
D
a
y
s
'
 
=
>
 
'
'
,

	
	
	
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
 
=
>
 
'
'
,

	
	
	
'
g
u
e
s
t
s
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
r
a
t
e
s
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
t
a
g
'
 
=
>
 
'
'
,

	
	
	
'
r
e
s
o
u
r
c
e
'
 
=
>
 
'
'
,

	
	
	
'
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
 
=
>
 
'
'
,

	
	
	
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
=
>
 
'
'
,

	
	
	
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
=
>
 
'
'
,

	
	
	
'
e
x
t
r
a
s
v
a
l
u
e
'
 
=
>
 
'
'
,

	
	
	
'
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
'
 
=
>
 
'
'
,

	
	
	
'
e
x
t
r
a
s
'
 
=
>
 
'
'
,

	
	
	
'
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
'
 
=
>
 
'
'
,

	
	
	
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
=
>
 
'
'
,

	
	
	
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
'
 
=
>
 
'
'
,

	
	
	
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
 
=
>
 
'
'
,

	
	
	
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
_
n
o
t
e
'
 
=
>
 
'
'
,

	
	
	
'
t
o
t
a
l
_
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
b
o
o
k
i
n
g
_
d
i
s
c
o
u
n
t
e
d
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
t
a
x
'
 
=
>
 
'
'
,

	
	
	
'
b
o
o
k
e
r
_
c
l
a
s
s
'
 
=
>
 
'
'
,

	
	
	
'
o
k
_
t
o
_
b
o
o
k
'
 
=
>
 
'
'
,

	
	
	
'
b
e
d
s
_
a
v
a
i
l
a
b
l
e
'
 
=
>
 
'
'
,

	
	
	
'
r
e
f
e
r
r
e
r
'
 
=
>
 
'
'
,

	
	
	
'
e
r
r
o
r
_
l
o
g
'
 
=
>
 
'
'
,

	
	
	
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
=
>
 
'
'
,

	
	
	
'
r
o
o
m
_
t
o
t
a
l
'
 
=
>
 
'
'
,

	
	
	
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
l
a
n
g
'
 
=
>
 
'
'
,

	
	
	
'
t
i
m
e
s
t
a
m
p
'
 
=
>
 
'
'
,

	
	
	
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
c
o
n
f
i
r
m
a
t
i
o
n
S
e
e
n
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
m
i
n
i
n
t
e
r
v
a
l
'
 
=
>
 
'
'
,

	
	
	
'
d
i
s
c
o
u
n
t
s
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
c
o
u
p
o
n
_
i
d
'
 
=
>
 
'
'
,

	
	
	
'
c
o
u
p
o
n
_
c
o
d
e
'
 
=
>
 
'
'
,

	
	
	
'
c
o
u
p
o
n
_
d
e
t
a
i
l
s
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
'
 
=
>
 
'
'
,

	
	
	
'
c
f
g
_
s
h
o
w
E
x
t
r
a
s
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
'
 
=
>
 
'
'
,

	
	
	
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
=
>
 
0
,

	
	
	
'
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
'
 
=
>
 
'
'
,

	
	
	
'
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
'
 
=
>
 
n
u
l
l
,

	
	
	
'
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
'
 
=
>
 
n
u
l
l
,

	
	
	
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
=
>
 
n
u
l
l
,

	
	
	
'
b
o
o
k
e
d
_
i
n
'
 
=
>
 
0
,

	
	
	
'
s
e
n
d
G
u
e
s
t
E
m
a
i
l
'
 
=
>
 
t
r
u
e
,

	
	
	
'
s
e
n
d
H
o
t
e
l
E
m
a
i
l
'
 
=
>
 
t
r
u
e
,

	
	
	
'
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
'
 
=
>
 
0

	
	
	
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
 
=
 
a
r
r
a
y
(

	
	
	
'
g
u
e
s
t
s
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
m
o
s
_
u
s
e
r
i
d
'
 
=
>
 
'
'
,

	
	
	
'
e
x
i
s
t
i
n
g
_
i
d
'
 
=
>
 
'
'
,

	
	
	
'
f
i
r
s
t
n
a
m
e
'
 
=
>
 
'
'
,

	
	
	
'
s
u
r
n
a
m
e
'
 
=
>
 
'
'
,

	
	
	
'
h
o
u
s
e
'
 
=
>
 
'
'
,

	
	
	
'
s
t
r
e
e
t
'
 
=
>
 
'
'
,

	
	
	
'
t
o
w
n
'
 
=
>
 
'
'
,

	
	
	
'
r
e
g
i
o
n
'
 
=
>
 
'
'
,

	
	
	
'
c
o
u
n
t
r
y
'
 
=
>
 
'
'
,

	
	
	
'
p
o
s
t
c
o
d
e
'
 
=
>
 
'
'
,

	
	
	
'
t
e
l
_
l
a
n
d
l
i
n
e
'
 
=
>
 
'
'
,

	
	
	
'
t
e
l
_
m
o
b
i
l
e
'
 
=
>
 
'
'
,

	
	
	
'
t
e
l
_
f
a
x
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
n
o
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
i
s
s
u
e
d
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
e
x
p
i
r
y
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
i
s
s
_
n
o
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
n
a
m
e
'
 
=
>
 
'
'
,

	
	
	
'
c
c
v
'
 
=
>
 
'
'
,

	
	
	
'
t
y
p
e
'
 
=
>
 
'
'
,

	
	
	
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
e
m
a
i
l
'
 
=
>
 
'
'
,

	
	
	
'
d
i
s
c
o
u
n
t
'
 
=
>
 
'
0
'
,

	
	
	
'
t
a
g
'
 
=
>
 
'
'
,

	
	
	
'
t
i
m
e
s
t
a
m
p
'
 
=
>
 
'
'
,

	
	
	
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
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

	
	
	
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
=
>
 
'
'
,
 

	
	
	
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
=
>
 
'
'

	
	
	
)
;

 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
l
a
n
g
 
=
 
a
r
r
a
y
(

	
	
	
'
j
o
m
r
e
s
l
a
n
g
'
 
=
>
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)

	
	
	
)
;

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
 
=
 
a
r
r
a
y
(

	
	
	
'
e
d
i
t
i
n
g
_
o
n
'
 
=
>
 
f
a
l
s
e
,
 

	
	
	
'
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
'
 
=
>
 
f
a
l
s
e
,
 

	
	
	
'
l
a
s
t
_
v
i
e
w
e
d
_
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
0

	
	
	
)
;


	
	
$
t
h
i
s
-
>
c
a
r
t
_
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

	
	

	
	
/
/
w
e
`
l
l
 
s
t
o
r
e
 
h
e
r
e
 
t
h
e
 
d
u
p
l
i
c
a
t
e
s
 
o
f
 
t
h
e
 
s
e
s
s
i
o
n
 
d
a
t
a
 
s
o
 
w
e
 
c
a
n
 
c
o
m
p
a
r
e
 
w
i
t
h
 
t
h
e
s
e
 
f
o
r
 
c
h
a
n
g
e
s
.
 
I
f
 
t
h
e
r
e
 
a
r
e
 
n
o
 
c
h
a
n
g
e
s
,
 
w
e
 
d
o
n
`
t
 
n
e
e
d
 
t
o
 
w
r
i
t
e
 
t
h
e
 
s
e
s
s
i
o
n
 
d
a
t
a
 
a
g
a
i
n

	
	
$
t
h
i
s
-
>
_
i
n
f
o
 
=
 
$
t
h
i
s
-
>
i
n
f
o
;

	
	
$
t
h
i
s
-
>
_
t
m
p
b
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
;

	
	
$
t
h
i
s
-
>
_
t
m
p
g
u
e
s
t
 
=
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
;

	
	
$
t
h
i
s
-
>
_
c
a
r
t
_
d
a
t
a
 
=
 
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
;

	
	
$
t
h
i
s
-
>
_
t
m
p
s
e
a
r
c
h
_
d
a
t
a
 
=
 
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
;

	
	
$
t
h
i
s
-
>
_
t
m
p
l
a
n
g
 
=
 
$
t
h
i
s
-
>
t
m
p
l
a
n
g
;

	
	
$
t
h
i
s
-
>
_
u
s
e
r
_
s
e
t
t
i
n
g
s
 
=
 
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}

	

	
/
/
i
f
 
t
h
e
 
i
p
 
a
n
d
 
u
s
e
r
 
a
g
e
n
t
 
d
o
n
`
t
 
m
a
t
c
h
,
 
e
x
i
t
 
h
e
r
e

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
p
r
e
v
e
n
t
H
i
j
a
c
k
i
n
g
(
)

	
{

	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
i
n
f
o
[
'
i
p
'
]
)
 
|
|
 
!
i
s
s
e
t
(
$
t
h
i
s
-
>
i
n
f
o
[
'
u
s
e
r
_
a
g
e
n
t
'
]
)
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
-
>
i
n
f
o
[
'
i
p
'
]
 
!
=
 
$
t
h
i
s
-
>
i
p
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
-
>
i
n
f
o
[
'
u
s
e
r
_
a
g
e
n
t
'
]
 
!
=
 
$
t
h
i
s
-
>
u
s
e
r
_
a
g
e
n
t
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
C
u
s
t
o
m
F
i
e
l
d
s
(
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 

	
	
f
o
r
e
a
c
h
 
(
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
i
d
 
=
 
$
f
[
 
'
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
B
o
o
k
i
n
g
f
i
e
l
d
N
a
m
e
 
=
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
.
'
_
'
.
$
u
i
d
;

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
$
n
e
w
B
o
o
k
i
n
g
f
i
e
l
d
N
a
m
e
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
d
d
N
e
w
B
o
o
k
i
n
g
F
i
e
l
d
(
$
n
e
w
B
o
o
k
i
n
g
f
i
e
l
d
N
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
a
v
e
C
u
s
t
o
m
F
i
e
l
d
s
(
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
i
d
 
=
 
$
f
[
 
'
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
B
o
o
k
i
n
g
f
i
e
l
d
N
a
m
e
 
=
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
.
'
_
'
.
$
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
.
'
_
'
.
$
u
i
d
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
$
n
e
w
B
o
o
k
i
n
g
f
i
e
l
d
N
a
m
e
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
d
d
N
e
w
B
o
o
k
i
n
g
F
i
e
l
d
(
$
n
e
w
B
o
o
k
i
n
g
f
i
e
l
d
N
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
$
n
e
w
B
o
o
k
i
n
g
f
i
e
l
d
N
a
m
e
,
 
$
d
a
t
a
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
B
o
o
k
i
n
g
S
e
s
s
i
o
n
(
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
_
R
E
Q
U
E
S
T
[
 
'
j
s
i
d
'
 
]
)
)
 
{
 
/
/
 
j
s
i
d
 
i
s
 
p
a
s
s
e
d
 
b
y
 
g
a
t
e
w
a
y
 
s
e
r
v
i
c
e
s
 
s
e
n
d
i
n
g
 
r
e
s
p
o
n
s
e
 
c
o
d
e
s

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
s
s
i
o
n
_
i
d
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
j
s
i
d
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
s
t
r
l
e
n
(
$
j
o
m
r
e
s
s
e
s
s
i
o
n
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
s
s
i
o
n
_
i
d
 
=
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
s
s
i
o
n
_
i
d
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
s
e
s
s
i
o
n
i
d
(
)
;

 
 
 
 
 
 
 
 
}


	
	
/
/
w
e
`
l
l
 
c
h
e
c
k
 
t
o
 
s
e
e
 
i
f
 
s
e
s
s
i
o
n
 
i
d
 
i
s
 
s
e
t
 
a
n
d
 
i
f
 
w
e
 
h
a
v
e
n
`
t
 
a
l
r
e
a
d
y
 
l
o
a
d
e
d
 
i
t
.
.

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
s
e
s
s
i
o
n
_
i
d
)
 
>
 
0
 
&
&
 
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
 
!
=
 
$
s
e
s
s
i
o
n
_
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
$
s
e
s
s
i
o
n
_
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
 
=
 
s
h
a
1
(
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
 
=
 
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
.
$
h
a
s
h
.
'
.
t
x
t
'
;

	
	
	

	
	
	
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
_
d
b
 
=
 
s
u
b
s
t
r
(
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
,
 
0
,
 
5
0
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
e
r
-
>
g
e
t
_
a
l
l
_
c
u
s
t
o
m
_
f
i
e
l
d
s
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
C
u
s
t
o
m
F
i
e
l
d
s
(
$
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
e
r
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
j
o
m
r
e
s
_
s
t
a
r
t
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
s
s
i
o
n
_
j
o
m
r
e
s
_
s
t
a
r
t
(
)

 
 
 
 
{

	
	
i
f
 
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
 
=
=
 
'
f
i
l
e
'
)
 
{

	
	
	
$
t
h
i
s
-
>
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
_
s
t
a
r
t
_
f
i
l
e
(
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
_
s
t
a
r
t
_
d
a
t
a
b
a
s
e
(
)
;

	
	
}

 
 
 
 
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
_
s
t
a
r
t
_
f
i
l
e
(
)
 

	
{

	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
)
)
 
{

	
	
	
$
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
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
)
;

	
	
	

	
	
	
$
d
a
t
a
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
s
t
r
i
p
s
l
a
s
h
e
s
(
$
d
a
t
a
)
,
 
t
r
u
e
)
;

	
	
	

	
	
	
$
t
h
i
s
-
>
i
n
f
o
	
	
	
	
=
 
$
d
a
t
a
[
 
'
i
n
f
o
'
 
]
;

	
	
	

	
	
	
/
/
s
e
s
s
i
o
n
 
i
p
 
o
r
 
u
s
e
r
 
a
g
e
n
t
 
d
o
n
`
t
 
m
a
t
c
h
 
t
h
e
 
v
i
s
i
t
o
r
 
i
p
 
o
r
 
u
s
e
r
 
a
g
e
n
t

	
	
	
i
f
 
(
$
t
h
i
s
-
>
_
p
r
e
v
e
n
t
H
i
j
a
c
k
i
n
g
(
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
_
i
n
i
t
(
)
;

	
	
	
}

	
	
	

	
	
	
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
 
	
	
=
 
$
d
a
t
a
[
 
'
t
m
p
b
o
o
k
i
n
g
'
 
]
;

	
	
	
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
 
	
	
=
 
$
d
a
t
a
[
 
'
t
m
p
g
u
e
s
t
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
 
	
	
=
 
$
d
a
t
a
[
 
'
c
a
r
t
_
d
a
t
a
'
 
]
;

	
	
	
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
 
	
=
 
$
d
a
t
a
[
 
'
t
m
p
s
e
a
r
c
h
_
d
a
t
a
'
 
]
;

	
	
	
$
t
h
i
s
-
>
t
m
p
l
a
n
g
 
	
	
	
=
 
$
d
a
t
a
[
 
'
t
m
p
l
a
n
g
'
 
]
;

	
	
	
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
 
	
=
 
$
d
a
t
a
[
 
'
u
s
e
r
_
s
e
t
t
i
n
g
s
'
 
]
;


	
	
	
/
/
w
e
`
l
l
 
s
t
o
r
e
 
h
e
r
e
 
t
h
e
 
d
u
p
l
i
c
a
t
e
s
 
o
f
 
t
h
e
 
s
e
s
s
i
o
n
 
d
a
t
a
 
s
o
 
w
e
 
c
a
n
 
c
o
m
p
a
r
e
 
w
i
t
h
 
t
h
e
s
e
 
f
o
r
 
c
h
a
n
g
e
s
.
 
I
f
 
t
h
e
r
e
 
a
r
e
 
n
o
 
c
h
a
n
g
e
s
,
 
w
e
 
d
o
n
`
t
 
n
e
e
d
 
t
o
 
w
r
i
t
e
 
t
h
e
 
s
e
s
s
i
o
n
 
d
a
t
a
 
a
g
a
i
n

	
	
	
$
t
h
i
s
-
>
_
i
n
f
o
 
	
	
	
=
 
$
t
h
i
s
-
>
i
n
f
o
;

	
	
	
$
t
h
i
s
-
>
_
t
m
p
b
o
o
k
i
n
g
 
	
	
=
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
;

	
	
	
$
t
h
i
s
-
>
_
t
m
p
g
u
e
s
t
 
	
	
=
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
;

	
	
	
$
t
h
i
s
-
>
_
c
a
r
t
_
d
a
t
a
 
	
	
=
 
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
;

	
	
	
$
t
h
i
s
-
>
_
t
m
p
s
e
a
r
c
h
_
d
a
t
a
 
	
=
 
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
;

	
	
	
$
t
h
i
s
-
>
_
t
m
p
l
a
n
g
 
	
	
=
 
$
t
h
i
s
-
>
t
m
p
l
a
n
g
;

	
	
	
$
t
h
i
s
-
>
_
u
s
e
r
_
s
e
t
t
i
n
g
s
 
	
=
 
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
;

	
	
}
 
e
l
s
e
 
{
 
/
/
 
s
e
s
s
i
o
n
 
f
i
l
e
 
d
o
e
s
n
'
t
 
e
x
i
s
t
,
 
l
e
t
'
s
 
c
r
e
a
t
e
 
i
t

	
	
	
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

	
	
	
	
'
i
n
f
o
'
 
=
>
 
$
t
h
i
s
-
>
i
n
f
o
,

	
	
	
	
'
t
m
p
b
o
o
k
i
n
g
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
,
 

	
	
	
	
'
c
a
r
t
_
d
a
t
a
'
 
=
>
 
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
,
 

	
	
	
	
'
t
m
p
g
u
e
s
t
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
,
 

	
	
	
	
'
t
m
p
s
e
a
r
c
h
_
d
a
t
a
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
,
 

	
	
	
	
'
t
m
p
l
a
n
g
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
l
a
n
g
,
 

	
	
	
	
'
u
s
e
r
_
s
e
t
t
i
n
g
s
'
 
=
>
 
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s

	
	
	
	
)
;

	
	
	

	
	
	
$
d
a
t
a
 
=
 
j
s
o
n
_
e
n
c
o
d
e
(
$
d
a
t
a
,
 
J
S
O
N
_
H
E
X
_
A
P
O
S
 
|
 
J
S
O
N
_
H
E
X
_
Q
U
O
T
 
|
 
J
S
O
N
_
U
N
E
S
C
A
P
E
D
_
U
N
I
C
O
D
E
)
;

	
	
	

	
	
	
i
f
 
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
 
!
=
 
'
'
)
 
{

	
	
	
	
i
f
 
(
!
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
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
,
 
$
d
a
t
a
)
)
 
{

	
	
	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
s
a
v
e
 
s
e
s
s
i
o
n
 
f
i
l
e
'
)
;

	
	
	
	
}

	
	
	
}

	
	
}

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
_
s
t
a
r
t
_
d
a
t
a
b
a
s
e
(
)

	
{

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
d
a
t
a
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
s
 
W
H
E
R
E
 
`
s
e
s
s
i
o
n
_
i
d
`
 
=
 
'
"
.
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
_
d
b
.
"
'
"
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
r
e
s
u
l
t
)
)
 
{

	
	
	
$
r
e
s
u
l
t
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
e
s
u
l
t
[
0
]
-
>
d
a
t
a
)
,
 
t
r
u
e
)
;


	
	
	
$
t
h
i
s
-
>
i
n
f
o
	
	
	
	
=
 
$
r
e
s
u
l
t
[
 
'
i
n
f
o
'
 
]
;

	
	
	

	
	
	
/
/
s
e
s
s
i
o
n
 
i
p
 
o
r
 
u
s
e
r
 
a
g
e
n
t
 
d
o
n
`
t
 
m
a
t
c
h
 
t
h
e
 
v
i
s
i
t
o
r
 
i
p
 
o
r
 
u
s
e
r
 
a
g
e
n
t

	
	
	
i
f
 
(
$
t
h
i
s
-
>
_
p
r
e
v
e
n
t
H
i
j
a
c
k
i
n
g
(
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
_
i
n
i
t
(
)
;

	
	
	
}


	
	
	
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
 
	
	
=
 
$
r
e
s
u
l
t
[
 
'
t
m
p
b
o
o
k
i
n
g
'
 
]
;

	
	
	
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
 
	
	
=
 
$
r
e
s
u
l
t
[
 
'
t
m
p
g
u
e
s
t
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
 
	
	
=
 
$
r
e
s
u
l
t
[
 
'
c
a
r
t
_
d
a
t
a
'
 
]
;

	
	
	
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
 
	
=
 
$
r
e
s
u
l
t
[
 
'
t
m
p
s
e
a
r
c
h
_
d
a
t
a
'
 
]
;

	
	
	
$
t
h
i
s
-
>
t
m
p
l
a
n
g
 
	
	
	
=
 
$
r
e
s
u
l
t
[
 
'
t
m
p
l
a
n
g
'
 
]
;

	
	
	
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
 
	
=
 
$
r
e
s
u
l
t
[
 
'
u
s
e
r
_
s
e
t
t
i
n
g
s
'
 
]
;

	
	
	

	
	
	
/
/
w
e
`
l
l
 
s
t
o
r
e
 
h
e
r
e
 
t
h
e
 
d
u
p
l
i
c
a
t
e
s
 
o
f
 
t
h
e
 
s
e
s
s
i
o
n
 
d
a
t
a
 
s
o
 
w
e
 
c
a
n
 
c
o
m
p
a
r
e
 
w
i
t
h
 
t
h
e
s
e
 
f
o
r
 
c
h
a
n
g
e
s
.
 
I
f
 
t
h
e
r
e
 
a
r
e
 
n
o
 
c
h
a
n
g
e
s
,
 
w
e
 
d
o
n
`
t
 
n
e
e
d
 
t
o
 
w
r
i
t
e
 
t
h
e
 
s
e
s
s
i
o
n
 
d
a
t
a
 
a
g
a
i
n

	
	
	
$
t
h
i
s
-
>
_
i
n
f
o
 
	
	
	
=
 
$
t
h
i
s
-
>
i
n
f
o
;

	
	
	
$
t
h
i
s
-
>
_
t
m
p
b
o
o
k
i
n
g
 
	
	
=
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
;

	
	
	
$
t
h
i
s
-
>
_
t
m
p
g
u
e
s
t
 
	
	
=
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
;

	
	
	
$
t
h
i
s
-
>
_
c
a
r
t
_
d
a
t
a
 
	
	
=
 
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
;

	
	
	
$
t
h
i
s
-
>
_
t
m
p
s
e
a
r
c
h
_
d
a
t
a
 
	
=
 
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
;

	
	
	
$
t
h
i
s
-
>
_
t
m
p
l
a
n
g
 
	
	
=
 
$
t
h
i
s
-
>
t
m
p
l
a
n
g
;

	
	
	
$
t
h
i
s
-
>
_
u
s
e
r
_
s
e
t
t
i
n
g
s
 
	
=
 
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
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
 
=
 
a
r
r
a
y
(

	
	
	
	
'
i
n
f
o
'
 
=
>
 
$
t
h
i
s
-
>
i
n
f
o
,

	
	
	
	
'
t
m
p
b
o
o
k
i
n
g
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
,
 

	
	
	
	
'
c
a
r
t
_
d
a
t
a
'
 
=
>
 
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
,
 

	
	
	
	
'
t
m
p
g
u
e
s
t
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
,
 

	
	
	
	
'
t
m
p
s
e
a
r
c
h
_
d
a
t
a
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
,
 

	
	
	
	
'
t
m
p
l
a
n
g
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
l
a
n
g
,
 

	
	
	
	
'
u
s
e
r
_
s
e
t
t
i
n
g
s
'
 
=
>
 
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s

	
	
	
	
)
;

	
	
	

	
	
	
$
d
a
t
a
 
=
 
j
s
o
n
_
e
n
c
o
d
e
(
$
d
a
t
a
,
 
J
S
O
N
_
H
E
X
_
A
P
O
S
 
|
 
J
S
O
N
_
H
E
X
_
Q
U
O
T
 
|
 
J
S
O
N
_
U
N
E
S
C
A
P
E
D
_
U
N
I
C
O
D
E
)
;

	
	
	

	
	
	
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
s
 
(
`
s
e
s
s
i
o
n
_
i
d
`
,
 
`
d
a
t
a
`
)
 
V
A
L
U
E
S
 
(
'
"
.
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
_
d
b
.
"
'
,
'
"
.
$
d
a
t
a
.
"
'
)
"
;

	
	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

	
	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
s
a
v
e
 
s
e
s
s
i
o
n
 
d
a
t
a
'
)
;

	
	
	
}

	
	
}

	
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
l
o
s
e
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
(
)

 
 
 
 
{

	
	
i
f
 
(

	
	
	
$
t
h
i
s
-
>
i
n
f
o
 
!
=
 
$
t
h
i
s
-
>
_
i
n
f
o
 
|
|
 

	
	
	
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
 
!
=
 
$
t
h
i
s
-
>
_
t
m
p
b
o
o
k
i
n
g
 
|
|
 

	
	
	
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
 
!
=
 
$
t
h
i
s
-
>
_
c
a
r
t
_
d
a
t
a
 
|
|
 

	
	
	
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
 
!
=
 
$
t
h
i
s
-
>
_
t
m
p
g
u
e
s
t
 
|
|
 

	
	
	
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
 
!
=
 
$
t
h
i
s
-
>
_
t
m
p
s
e
a
r
c
h
_
d
a
t
a
 
|
|
 

	
	
	
$
t
h
i
s
-
>
t
m
p
l
a
n
g
 
!
=
 
$
t
h
i
s
-
>
_
t
m
p
l
a
n
g
 
|
|
 

	
	
	
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
 
!
=
 
$
t
h
i
s
-
>
_
u
s
e
r
_
s
e
t
t
i
n
g
s

	
	
	
)
 
{

	
	
	
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

	
	
	
	
'
i
n
f
o
'
 
=
>
 
$
t
h
i
s
-
>
i
n
f
o
,

	
	
	
	
'
t
m
p
b
o
o
k
i
n
g
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
,
 

	
	
	
	
'
c
a
r
t
_
d
a
t
a
'
 
=
>
 
$
t
h
i
s
-
>
c
a
r
t
_
d
a
t
a
,
 

	
	
	
	
'
t
m
p
g
u
e
s
t
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
,
 

	
	
	
	
'
t
m
p
s
e
a
r
c
h
_
d
a
t
a
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
,
 

	
	
	
	
'
t
m
p
l
a
n
g
'
 
=
>
 
$
t
h
i
s
-
>
t
m
p
l
a
n
g
,
 

	
	
	
	
'
u
s
e
r
_
s
e
t
t
i
n
g
s
'
 
=
>
 
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s

	
	
	
	
)
;

	
	
	

	
	
	
$
d
a
t
a
 
=
 
j
s
o
n
_
e
n
c
o
d
e
(
$
d
a
t
a
,
 
J
S
O
N
_
H
E
X
_
A
P
O
S
 
|
 
J
S
O
N
_
H
E
X
_
Q
U
O
T
 
|
 
J
S
O
N
_
U
N
E
S
C
A
P
E
D
_
U
N
I
C
O
D
E
)
;


	
	
	
i
f
 
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
 
=
=
 
'
f
i
l
e
'
)
 
{

	
	
	
	
i
f
 
(
!
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
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
,
 
$
d
a
t
a
)
)
 
{

	
	
	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
s
a
v
e
 
s
e
s
s
i
o
n
 
f
i
l
e
'
)
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
s
 
S
E
T
 
`
d
a
t
a
`
 
=
 
'
"
.
$
d
a
t
a
.
"
'
 
W
H
E
R
E
 
`
s
e
s
s
i
o
n
_
i
d
`
 
=
 
'
"
.
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
_
d
b
.
"
'
"
;

	
	
	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

	
	
	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
u
p
d
a
t
e
 
s
e
s
s
i
o
n
 
d
a
t
a
 
t
o
 
d
a
t
a
b
a
s
e
'
)
;

	
	
	
	
}

	
	
	
}

	
	
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
J
o
m
r
e
s
s
e
s
s
i
o
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
j
o
m
r
e
s
s
e
s
s
i
o
n
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
B
o
o
k
i
n
g
P
r
o
p
e
r
t
y
I
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
B
o
o
k
i
n
g
D
a
t
a
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
G
u
e
s
t
D
a
t
a
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
a
v
e
B
o
o
k
i
n
g
D
a
t
a
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
l
o
s
e
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
a
v
e
G
u
e
s
t
D
a
t
a
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
l
o
s
e
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
$
f
i
e
l
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
$
f
i
e
l
d
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
$
f
i
e
l
d
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
$
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
 
$
v
a
l
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
$
f
i
e
l
d
n
a
m
e
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
d
d
N
e
w
B
o
o
k
i
n
g
F
i
e
l
d
(
$
f
i
e
l
d
n
a
m
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
$
f
i
e
l
d
n
a
m
e
 
]
 
=
 
$
v
a
l
u
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
$
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
 
$
v
a
l
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
[
 
$
f
i
e
l
d
n
a
m
e
 
]
 
=
 
$
v
a
l
u
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
N
e
w
B
o
o
k
i
n
g
F
i
e
l
d
(
$
f
i
e
l
d
n
a
m
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
$
f
i
e
l
d
n
a
m
e
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
N
e
w
G
u
e
s
t
F
i
e
l
d
(
$
f
i
e
l
d
n
a
m
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
[
 
$
f
i
e
l
d
n
a
m
e
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
C
r
e
d
i
t
C
a
r
d
D
e
t
a
i
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
 
=
 
a
r
r
a
y
(

	
	
	
'
c
c
a
r
d
_
n
o
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
i
s
s
u
e
d
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
e
x
p
i
r
y
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
i
s
s
_
n
o
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
n
a
m
e
'
 
=
>
 
'
'
,

	
	
	
'
c
c
v
'
 
=
>
 
'
'
,

	
	
	
'
t
y
p
e
'
 
=
>
 
'
'
,

	
	
	
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
T
e
m
p
G
u
e
s
t
D
a
t
a
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
g
u
e
s
t
 
=
 
a
r
r
a
y
(

	
	
	
'
g
u
e
s
t
s
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
m
o
s
_
u
s
e
r
i
d
'
 
=
>
 
'
'
,

	
	
	
'
e
x
i
s
t
i
n
g
_
i
d
'
 
=
>
 
'
'
,

	
	
	
'
f
i
r
s
t
n
a
m
e
'
 
=
>
 
'
'
,

	
	
	
'
s
u
r
n
a
m
e
'
 
=
>
 
'
'
,

	
	
	
'
h
o
u
s
e
'
 
=
>
 
'
'
,

	
	
	
'
s
t
r
e
e
t
'
 
=
>
 
'
'
,

	
	
	
'
t
o
w
n
'
 
=
>
 
'
'
,

	
	
	
'
r
e
g
i
o
n
'
 
=
>
 
'
'
,

	
	
	
'
c
o
u
n
t
r
y
'
 
=
>
 
'
'
,

	
	
	
'
p
o
s
t
c
o
d
e
'
 
=
>
 
'
'
,

	
	
	
'
t
e
l
_
l
a
n
d
l
i
n
e
'
 
=
>
 
'
'
,

	
	
	
'
t
e
l
_
m
o
b
i
l
e
'
 
=
>
 
'
'
,

	
	
	
'
t
e
l
_
f
a
x
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
n
o
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
i
s
s
u
e
d
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
e
x
p
i
r
y
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
i
s
s
_
n
o
'
 
=
>
 
'
'
,

	
	
	
'
c
c
a
r
d
_
n
a
m
e
'
 
=
>
 
'
'
,

	
	
	
'
c
c
v
'
 
=
>
 
'
'
,

	
	
	
'
t
y
p
e
'
 
=
>
 
'
'
,

	
	
	
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
e
m
a
i
l
'
 
=
>
 
'
'
,

	
	
	
'
d
i
s
c
o
u
n
t
'
 
=
>
 
'
0
'
,

	
	
	
'
t
a
g
'
 
=
>
 
'
'
,

	
	
	
'
t
i
m
e
s
t
a
m
p
'
 
=
>
 
'
'
,

	
	
	
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
T
e
m
p
B
o
o
k
i
n
g
D
a
t
a
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
p
i
d
 
=
 
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
-
>
t
m
p
b
o
o
k
i
n
g
 
=
 
a
r
r
a
y
(

	
	
	
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
$
p
i
d
,

	
	
	
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
=
>
 
'
'
,

	
	
	
'
r
a
t
e
_
p
e
r
n
i
g
h
t
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
t
y
p
e
s
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
u
i
d
s
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
q
t
y
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
v
a
l
s
'
 
=
>
 
'
'
,

	
	
	
'
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
l
a
s
t
m
i
n
u
t
e
_
i
d
'
 
=
>
 
'
'
,

	
	
	
'
a
g
e
n
t
_
b
o
o
k
i
n
g
'
 
=
>
 
'
'
,

	
	
	
'
s
t
a
y
D
a
y
s
'
 
=
>
 
'
'
,

	
	
	
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
 
=
>
 
'
'
,

	
	
	
'
g
u
e
s
t
s
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
r
a
t
e
s
_
u
i
d
'
 
=
>
 
'
'
,

	
	
	
'
t
a
g
'
 
=
>
 
'
'
,

	
	
	
'
r
e
s
o
u
r
c
e
'
 
=
>
 
'
'
,

	
	
	
'
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
 
=
>
 
'
'
,

	
	
	
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
=
>
 
'
'
,

	
	
	
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
=
>
 
'
'
,

	
	
	
'
e
x
t
r
a
s
v
a
l
u
e
'
 
=
>
 
'
'
,

	
	
	
'
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
'
 
=
>
 
'
'
,

	
	
	
'
e
x
t
r
a
s
'
 
=
>
 
'
'
,

	
	
	
'
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
'
 
=
>
 
'
'
,

	
	
	
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
=
>
 
'
'
,

	
	
	
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
'
 
=
>
 
'
'
,

	
	
	
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
 
=
>
 
'
'
,

	
	
	
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
_
n
o
t
e
'
 
=
>
 
'
'
,

	
	
	
'
t
o
t
a
l
_
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
b
o
o
k
i
n
g
_
d
i
s
c
o
u
n
t
e
d
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
t
a
x
'
 
=
>
 
'
'
,

	
	
	
'
b
o
o
k
e
r
_
c
l
a
s
s
'
 
=
>
 
'
'
,

	
	
	
'
o
k
_
t
o
_
b
o
o
k
'
 
=
>
 
'
'
,

	
	
	
'
b
e
d
s
_
a
v
a
i
l
a
b
l
e
'
 
=
>
 
'
'
,

	
	
	
'
r
e
f
e
r
r
e
r
'
 
=
>
 
'
'
,

	
	
	
'
e
r
r
o
r
_
l
o
g
'
 
=
>
 
'
'
,

	
	
	
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
=
>
 
'
'
,

	
	
	
'
r
o
o
m
_
t
o
t
a
l
'
 
=
>
 
'
'
,

	
	
	
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
l
a
n
g
'
 
=
>
 
'
'
,

	
	
	
'
t
i
m
e
s
t
a
m
p
'
 
=
>
 
'
'
,

	
	
	
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
 
=
>
 
'
'
,

	
	
	
'
c
o
n
f
i
r
m
a
t
i
o
n
S
e
e
n
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
m
i
n
i
n
t
e
r
v
a
l
'
 
=
>
 
'
'
,

	
	
	
'
d
i
s
c
o
u
n
t
s
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
c
o
u
p
o
n
_
i
d
'
 
=
>
 
'
'
,

	
	
	
'
c
o
u
p
o
n
_
c
o
d
e
'
 
=
>
 
'
'
,

	
	
	
'
c
o
u
p
o
n
_
d
e
t
a
i
l
s
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
'
 
=
>
 
'
'
,

	
	
	
'
c
f
g
_
s
h
o
w
E
x
t
r
a
s
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
'
 
=
>
 
'
'
,

	
	
	
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
=
>
 
0
,

	
	
	
'
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
'
 
=
>
 
'
'
,

	
	
	
'
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
'
 
=
>
 
n
u
l
l
,

	
	
	
'
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
'
 
=
>
 
n
u
l
l
,

	
	
	
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
=
>
 
n
u
l
l
,

	
	
	
'
b
o
o
k
e
d
_
i
n
'
 
=
>
 
0
,

	
	
	
'
s
e
n
d
G
u
e
s
t
E
m
a
i
l
'
 
=
>
 
t
r
u
e
,

	
	
	
'
s
e
n
d
H
o
t
e
l
E
m
a
i
l
'
 
=
>
 
t
r
u
e
,

	
	
	
'
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
'
 
=
>
 
f
a
l
s
e

	
	
	
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
C
a
r
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
a
r
t
_
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

 
 
 
 
}

	

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
T
m
p
S
e
a
r
c
h
D
a
t
a
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
s
e
a
r
c
h
_
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

	
	
	
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
=
>
 
'
'
,
 

	
	
	
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
=
>
 
'
'

	
	
)
;

 
 
 
 
}

	

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
T
m
p
U
s
e
r
D
a
t
a
(
)

	
{

	
	
$
t
h
i
s
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
 
=
 
a
r
r
a
y
(

	
	
	
'
e
d
i
t
i
n
g
_
o
n
'
 
=
>
 
f
a
l
s
e
,
 

	
	
	
'
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
'
 
=
>
 
f
a
l
s
e
,
 

	
	
	
'
l
a
s
t
_
v
i
e
w
e
d
_
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
0

	
	
)
;

	
}

}

