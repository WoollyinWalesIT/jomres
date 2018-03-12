
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
 
a
v
a
i
l
a
b
l
e
 
f
o
r
 
u
s
e
 
i
n
 
a
l
l
 
p
e
r
s
o
n
a
l
 
o
r
 
c
o
m
m
e
r
c
i
a
l
 
p
r
o
j
e
c
t
s
 
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
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
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


i
f
 
(
!
d
e
f
i
n
e
d
(
'
W
P
I
N
C
'
)
)
 
{

	
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
w
p
-
c
o
n
f
i
g
.
p
h
p
'
;

}


$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
g
e
t
_
s
i
t
e
_
u
r
l
(
'
s
i
t
e
u
r
l
'
)
;

i
f
 
(
d
e
f
i
n
e
d
(
'
A
P
I
_
S
T
A
R
T
E
D
'
)
)
 
{

 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
j
o
m
r
e
s
/
a
p
i
'
,
 
'
'
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
)
;

}


$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
'
e
n
-
G
B
'
;

$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
_
s
h
o
r
t
c
o
d
e
 
=
 
'
e
n
'
;

i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
_
'
,
 
'
-
'
,
 
g
e
t
_
l
o
c
a
l
e
(
)
)
;

	

	
/
/
g
e
t
 
l
a
n
g
 
s
h
o
r
t
 
c
o
d
e

	
/
/
T
O
D
O
:
 
t
h
i
s
 
i
s
 
u
n
r
e
l
i
a
b
l
e
 
a
t
 
t
h
i
s
 
p
o
i
n
t
,
 
f
o
r
 
e
x
a
m
p
l
e
 
f
o
r
 
p
t
-
B
R
 
a
n
d
 
p
t
-
P
T
,
 
b
e
c
a
u
s
e
 
t
h
e
 
l
a
n
g
u
a
g
e
 
c
o
d
e
 
i
s
 
a
l
w
a
y
s
 
p
t
.

	
/
/
l
a
t
e
r
 
i
n
 
t
h
e
 
c
o
d
e
 
i
n
 
c
m
s
_
s
p
e
c
i
f
i
c
_
u
r
l
s
.
p
h
p
 
t
h
e
 
c
o
r
r
e
c
t
 
s
h
o
r
t
c
o
d
e
 
w
i
l
l
 
b
e
 
s
e
t

	
/
/
N
o
t
 
a
 
p
r
o
b
l
e
m
 
i
n
 
J
o
o
m
l
a

	
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
_
s
h
o
r
t
c
o
d
e
 
=
 
s
u
b
s
t
r
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
,
 
0
,
 
2
)
;

}


$
s
h
o
w
t
i
m
e
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
s
h
o
w
t
i
m
e
'
)
;


$
s
h
o
w
t
i
m
e
-
>
e
r
r
o
r
_
r
e
p
o
r
t
i
n
g
 
=
 
0
;


$
s
h
o
w
t
i
m
e
-
>
l
a
n
g
 
=
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
;

$
s
h
o
w
t
i
m
e
-
>
l
a
n
g
_
s
h
o
r
t
c
o
d
e
 
=
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
_
s
h
o
r
t
c
o
d
e
;

$
s
h
o
w
t
i
m
e
-
>
l
i
v
e
_
s
i
t
e
 
=
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
;

$
s
h
o
w
t
i
m
e
-
>
o
f
f
l
i
n
e
 
=
 
f
a
l
s
e
;


g
l
o
b
a
l
 
$
w
p
d
b
;
 
/
/
w
p
 
g
l
o
b
a
l

$
s
h
o
w
t
i
m
e
-
>
d
b
 
=
 
$
w
p
d
b
-
>
d
b
n
a
m
e
;

$
s
h
o
w
t
i
m
e
-
>
u
s
e
r
 
=
 
$
w
p
d
b
-
>
d
b
u
s
e
r
;

$
s
h
o
w
t
i
m
e
-
>
p
a
s
s
w
o
r
d
 
=
 
$
w
p
d
b
-
>
d
b
p
a
s
s
w
o
r
d
;

$
s
h
o
w
t
i
m
e
-
>
h
o
s
t
 
=
 
$
w
p
d
b
-
>
d
b
h
o
s
t
;

$
s
h
o
w
t
i
m
e
-
>
s
e
c
r
e
t
 
=
 
A
U
T
H
_
S
A
L
T
;

$
s
h
o
w
t
i
m
e
-
>
d
b
p
r
e
f
i
x
 
=
 
$
w
p
d
b
-
>
p
r
e
f
i
x
;


$
s
h
o
w
t
i
m
e
-
>
s
i
t
e
n
a
m
e
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
b
l
o
g
n
a
m
e
'
)
;

$
s
h
o
w
t
i
m
e
-
>
m
a
i
l
e
r
 
=
 
'
m
a
i
l
'
;

$
s
h
o
w
t
i
m
e
-
>
m
a
i
l
f
r
o
m
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
a
d
m
i
n
_
e
m
a
i
l
'
)
;

$
s
h
o
w
t
i
m
e
-
>
f
r
o
m
n
a
m
e
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
b
l
o
g
n
a
m
e
'
)
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
u
s
e
r
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
m
a
i
l
s
e
r
v
e
r
_
l
o
g
i
n
'
)
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
p
a
s
s
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
m
a
i
l
s
e
r
v
e
r
_
p
a
s
s
'
)
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
h
o
s
t
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
m
a
i
l
s
e
r
v
e
r
_
u
r
l
'
)
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
p
o
r
t
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
m
a
i
l
s
e
r
v
e
r
_
p
o
r
t
'
)
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
a
u
t
h
 
=
 
0
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
s
e
c
u
r
e
 
=
 
'
'
;

/
/
$
s
h
o
w
t
i
m
e
-
>
g
z
i
p
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
g
z
i
p
c
o
m
p
r
e
s
s
i
o
n
'
)
;

$
s
h
o
w
t
i
m
e
-
>
g
z
i
p
 
=
 
'
0
'
;
 
/
/
t
h
i
s
 
i
s
 
n
o
t
 
u
s
e
d
 
i
n
 
w
p


i
f
 
(
g
e
t
_
o
p
t
i
o
n
(
'
p
e
r
m
a
l
i
n
k
_
s
t
r
u
c
t
u
r
e
'
)
 
!
=
 
'
'
)
 
{

 
 
 
 
$
s
h
o
w
t
i
m
e
-
>
s
e
f
 
=
 
'
1
'
;
 
 
/
/
 
S
e
f
 
u
r
l
s
 
a
r
e
 
e
n
a
b
l
e
d
.

}
 
e
l
s
e
 
{

 
 
 
 
$
s
h
o
w
t
i
m
e
-
>
s
e
f
 
=
 
'
0
'
;

}

