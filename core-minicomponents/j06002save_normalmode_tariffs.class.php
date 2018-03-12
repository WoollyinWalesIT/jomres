
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
0
6
0
0
2
s
a
v
e
_
n
o
r
m
a
l
m
o
d
e
_
t
a
r
i
f
f
s

{

 
 
 
 
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
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
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
d
a
t
e
_
d
e
f
a
u
l
t
_
t
i
m
e
z
o
n
e
_
s
e
t
(
'
U
T
C
'
)
;
 
/
/
 
M
u
s
t
 
b
e
 
l
e
f
t
 
i
n
 
p
l
a
c
e
,
 
w
i
t
h
o
u
t
 
i
t
 
t
h
e
 
d
a
t
e
 
r
a
n
g
e
 
s
e
l
e
c
t
o
r
s
 
w
i
l
l
 
n
o
t
 
w
o
r
k
 
p
r
o
p
e
r
l
y
 
o
n
 
s
e
r
v
e
r
s
 
w
i
t
h
 
d
i
f
f
e
r
e
n
t
 
t
i
m
e
z
o
n
e
s
.

	
	

	
	
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

	
	

	
	
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

	
	

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
'
t
a
r
i
f
f
m
o
d
e
'
]
 
!
=
 
'
0
'
 
|
|
 
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
'
1
'
 
|
|
 
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
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
)

	
	
	
r
e
t
u
r
n
;

	
	

	
	
$
b
a
s
i
c
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
d
e
t
a
i
l
s
 
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
b
a
s
i
c
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
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
b
a
s
i
c
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
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
)
;

	
	

	
	
/
/
r
o
o
m
s
 
o
b
j
e
c
t

	
	
j
r
_
i
m
p
o
r
t
(
'
j
r
p
o
r
t
a
l
_
r
o
o
m
s
'
)
;

	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
r
o
o
m
s
(
)
;

	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
;

	
	

	
	
/
/
r
a
t
e
s
 
o
b
j
e
c
t

	
	
j
r
_
i
m
p
o
r
t
(
'
j
r
p
o
r
t
a
l
_
r
a
t
e
s
'
)
;

	
	

	
	
/
/
S
R
P
s

	
	
i
f
 
(
$
m
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
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
r
a
t
e
s
(
)
;

	
	
	

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
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
 
	
=
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
;

	
	
	

	
	
	
/
/
r
a
t
e
 
d
e
t
a
i
l
s

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
 
	
=
 
(
i
n
t
)
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
 
'
t
a
r
i
f
f
t
y
p
e
i
d
'
,
 
0
 
)
;

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
a
t
e
s
_
u
i
d
 
	
	
=
 
(
i
n
t
)
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
,
 
0
 
)
;

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
o
o
m
c
l
a
s
s
_
u
i
d
 
	
=
 
(
i
n
t
)
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
 
'
r
o
o
m
t
y
p
e
'
,
 
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
]
)
;

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
m
a
x
p
e
o
p
l
e
 
	
	
=
 
(
i
n
t
)
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
 
'
m
a
x
_
p
e
o
p
l
e
'
,
 
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
a
x
p
e
o
p
l
e
'
]
)
;

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
v
a
l
i
d
f
r
o
m
 
	
	
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
)
;

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
v
a
l
i
d
t
o
 
	
	
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
 
s
t
r
t
o
t
i
m
e
(
'
+
1
0
 
y
e
a
r
s
'
)
)
;

	
	
	

	
	
	
$
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
	
	
	
	
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
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
,
 
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
 
)
;

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
=
 
c
o
n
v
e
r
t
_
e
n
t
e
r
e
d
_
p
r
i
c
e
_
i
n
t
o
_
s
a
f
e
_
f
l
o
a
t
(
$
r
o
o
m
r
a
t
e
p
e
r
d
a
y
)
;

	
	
	

	
	
	
/
/
r
o
o
m
 
d
e
t
a
i
l
s

	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
_
u
i
d
 
	
	
=
 
(
i
n
t
)
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
 
'
r
o
o
m
_
u
i
d
'
,
 
0
)
;

	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
o
o
m
c
l
a
s
s
_
u
i
d
;

	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
m
a
x
_
p
e
o
p
l
e
 
	
=
 
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
m
a
x
p
e
o
p
l
e
;

	
	
	

	
	
	
/
/
s
a
v
e
 
o
r
 
u
p
d
a
t
e
 
t
h
e
 
s
e
l
e
c
t
e
d
 
r
o
o
m

	
	
	
i
f
 
(
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
_
u
i
d
 
>
 
0
)
 
{

	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
c
o
m
m
i
t
_
u
p
d
a
t
e
_
r
o
o
m
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
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
c
o
m
m
i
t
_
n
e
w
_
r
o
o
m
(
)
;

	
	
	
}

	
	
	

	
	
	
/
/
s
a
v
e
 
n
e
w
 
o
r
 
u
p
d
a
t
e
 
e
x
i
s
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

	
	
	
/
/
w
e
 
u
s
e
 
s
a
v
e
_
r
a
t
e
_
l
e
g
a
c
y
 
o
n
l
y
 
f
o
r
 
a
d
v
a
n
c
e
d
 
a
n
d
 
n
o
r
m
a
l
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
s
,
 
m
i
c
r
o
m
a
n
a
g
e
 
u
s
e
s
 
s
a
v
e
_
r
a
t
e
(
)

	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
s
a
v
e
_
r
a
t
e
_
l
e
g
a
c
y
(
)
;

	
	
}
 
e
l
s
e
 
{
 
/
/
M
R
P
s

	
	
	
$
p
o
s
t
e
d
_
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
 
	
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
 
'
n
u
m
b
e
r
o
f
R
o
o
m
s
'
,
 
a
r
r
a
y
(
)
)
;

	
	
	
$
p
o
s
t
e
d
_
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
 
	
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
 
'
e
x
i
s
t
i
n
g
r
o
o
m
s
'
,
 
a
r
r
a
y
(
)
)
;

	
	
	
$
p
o
s
t
e
d
_
r
a
t
e
s
_
u
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
P
O
S
T
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
,
 
a
r
r
a
y
(
)
)
;

	
	
	
$
p
o
s
t
e
d
_
t
a
r
i
f
f
t
y
p
e
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
P
O
S
T
,
 
'
t
a
r
i
f
f
t
y
p
e
i
d
'
,
 
a
r
r
a
y
(
)
)
;

	
	
	
$
p
o
s
t
e
d
_
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
	
	
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
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
,
 
a
r
r
a
y
(
)
)
;

	
	
	
$
p
o
s
t
e
d
_
m
a
x
_
p
e
o
p
l
e
 
	
	
	
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
 
'
m
a
x
_
p
e
o
p
l
e
'
,
 
a
r
r
a
y
(
)
)
;

	
	
	
$
p
o
s
t
e
d
_
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
 
	
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
 
'
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
'
,
 
a
r
r
a
y
(
)
)
;

	
	
	

	
	
	
/
/
w
e
`
l
l
 
g
o
 
t
h
r
o
u
g
h
 
e
a
c
h
 
r
o
o
m
 
t
y
p
e
s
 
a
s
s
i
g
n
e
d
 
t
o
 
t
h
i
s
 
p
r
o
p
e
r
t
y
,
 
n
o
 
n
e
e
d
 
t
o
 
p
a
r
s
e
 
p
o
s
s
i
b
l
e
 
j
u
n
k
 
d
a
t
a
 
s
e
n
t
 
i
n
 
t
h
e
 
P
O
S
T

	
	
	
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
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
d
e
t
a
i
l
s
-
>
t
h
i
s
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
r
o
o
m
_
c
l
a
s
s
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
	
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
 
=
 
0
;

	
	
	
	
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
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
;

	
	
	
	
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
 
=
 
0
;

	
	
	
	
$
r
a
t
e
s
_
u
i
d
 
=
 
0
;

	
	
	
	
$
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
 
0
;

	
	
	
	
$
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
=
 
0
;

	
	
	
	
$
m
a
x
_
p
e
o
p
l
e
 
=
 
1
;

	
	
	
	
$
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
 
=
 
1
;

	
	
	
	

	
	
	
	
/
/
r
e
s
e
t
 
r
a
t
e
s
 
o
b
j
e
c
t

	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
r
a
t
e
s
(
)
;

	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
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
 
=
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
;

	
	
	
	

	
	
	
	
/
/
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
s
e
l
e
c
t
e
d

	
	
	
	
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
p
o
s
t
e
d
_
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
[
$
k
]
)
)
 
{

	
	
	
	
	
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
 
=
 
(
i
n
t
)
$
p
o
s
t
e
d
_
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
[
$
k
]
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
g
e
t
 
e
x
i
s
t
i
n
g
 
r
o
o
m
 
u
i
d
s

	
	
	
	
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
p
o
s
t
e
d
_
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
[
$
k
]
)
)
 
{

	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
 
=
 
$
p
o
s
t
e
d
_
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
[
$
k
]
;

	
	
	
	
	

	
	
	
	
	
i
f
 
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
 
!
=
 
'
'
)
 
{

	
	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
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
'
,
'
,
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
)
;

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
)
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
r
a
t
e
s
_
u
i
d
 
(
e
a
c
h
 
r
o
o
m
 
t
y
p
e
 
h
a
s
 
j
u
s
t
 
o
n
e
 
r
a
t
e
 
u
i
d
 
i
n
 
N
o
r
m
a
l
 
a
n
d
 
A
d
v
a
n
c
e
d
 
m
o
d
e
s
,
 
o
n
l
y
 
M
i
c
r
o
m
a
n
a
g
e
 
c
a
n
 
h
a
v
e
 
m
o
r
e
)

	
	
	
	
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
p
o
s
t
e
d
_
r
a
t
e
s
_
u
i
d
[
$
k
]
)
)
 
{

	
	
	
	
	
$
r
a
t
e
s
_
u
i
d
 
=
 
(
i
n
t
)
$
p
o
s
t
e
d
_
r
a
t
e
s
_
u
i
d
[
$
k
]
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
t
a
r
i
f
f
t
y
p
e
 
i
d

	
	
	
	
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
p
o
s
t
e
d
_
t
a
r
i
f
f
t
y
p
e
_
i
d
[
$
k
]
)
)
 
{

	
	
	
	
	
$
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
 
(
i
n
t
)
$
p
o
s
t
e
d
_
t
a
r
i
f
f
t
y
p
e
_
i
d
[
$
k
]
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
r
o
o
m
r
a
t
e
p
e
r
d
a
y

	
	
	
	
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
p
o
s
t
e
d
_
r
o
o
m
r
a
t
e
p
e
r
d
a
y
[
$
k
]
)
)
 
{

	
	
	
	
	
$
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
=
 
c
o
n
v
e
r
t
_
e
n
t
e
r
e
d
_
p
r
i
c
e
_
i
n
t
o
_
s
a
f
e
_
f
l
o
a
t
(
$
p
o
s
t
e
d
_
r
o
o
m
r
a
t
e
p
e
r
d
a
y
[
$
k
]
)
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
m
a
x
 
p
e
o
p
l
e
 
p
e
r
 
r
o
o
m

	
	
	
	
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
p
o
s
t
e
d
_
m
a
x
_
p
e
o
p
l
e
[
$
k
]
)
)
 
{

	
	
	
	
	
$
m
a
x
_
p
e
o
p
l
e
 
=
 
(
i
n
t
)
$
p
o
s
t
e
d
_
m
a
x
_
p
e
o
p
l
e
[
$
k
]
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
m
a
x
 
p
e
o
o
p
l
e
 
i
n
 
t
a
r
i
f
f

	
	
	
	
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
p
o
s
t
e
d
_
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
[
$
k
]
)
)
 
{

	
	
	
	
	
$
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
 
=
 
(
i
n
t
)
$
p
o
s
t
e
d
_
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
[
$
k
]
;

	
	
	
	
}

	
	
	
	

	
	
	
	
i
f
 
(
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
 
>
 
0
)
 
{

	
	
	
	
	
/
/
u
p
d
a
t
e
 
r
o
o
m
s
 
(
d
e
l
e
t
e
 
o
r
 
c
r
e
a
t
e
 
n
e
w
 
o
n
e
s
 
i
f
 
n
e
e
d
e
d
)

	
	
	
	
	
i
f
 
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
 
>
 
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
)
 
{

	
	
	
	
	
	
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
_
t
o
_
d
e
l
e
t
e
 
=
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
 
-
 
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
;

	
	
	
	
	
	

	
	
	
	
	
	
$
i
 
=
 
0
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
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
 
a
s
 
$
r
_
u
i
d
)
 
{

	
	
	
	
	
	
	
i
f
 
(
$
i
 
<
 
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
_
t
o
_
d
e
l
e
t
e
)
 
{

	
	
	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
_
u
i
d
 
=
 
$
r
_
u
i
d
;

	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
i
f
 
(
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
d
e
l
e
t
e
_
r
o
o
m
(
)
)
 
{

	
	
	
	
	
	
	
	
	
$
i
+
+
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
i
f
 
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
 
<
 
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
)
 
{

	
	
	
	
	
	
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
_
t
o
_
a
d
d
 
=
 
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
 
-
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
;

	
	
	
	
	
	

	
	
	
	
	
	
/
/
m
a
s
s
 
c
r
e
a
t
e
 
r
o
o
m
s

	
	
	
	
	
	
i
f
 
(
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
_
t
o
_
a
d
d
 
>
 
0
)
 
{

	
	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
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
s
_
u
i
d
'
]
 
=
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
;

	
	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
'
]
 
=
 
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
_
t
o
_
a
d
d
;

	
	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
=
 
$
k
;

	
	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
m
a
x
_
p
e
o
p
l
e
'
]
 
=
 
$
m
a
x
_
p
e
o
p
l
e
;

	
	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
d
e
l
e
t
e
_
e
x
i
s
t
i
n
g
_
r
o
o
m
s
'
]
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
	

	
	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
c
o
m
m
i
t
_
n
e
w
_
r
o
o
m
s
(
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
/
/
r
a
t
e
 
d
e
t
a
i
l
s

	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
 
	
=
 
$
t
a
r
i
f
f
t
y
p
e
_
i
d
;

	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
a
t
e
s
_
u
i
d
 
	
	
=
 
$
r
a
t
e
s
_
u
i
d
;

	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
o
o
m
c
l
a
s
s
_
u
i
d
 
	
=
 
$
k
;

	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
m
a
x
p
e
o
p
l
e
 
	
	
=
 
$
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
;

	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
=
 
$
r
o
o
m
r
a
t
e
p
e
r
d
a
y
;

	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
v
a
l
i
d
f
r
o
m
 
	
	
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
)
;

	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
v
a
l
i
d
t
o
 
	
	
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
 
s
t
r
t
o
t
i
m
e
(
'
+
1
0
 
y
e
a
r
s
'
)
)
;

	
	
	
	
	

	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
s
a
v
e
_
r
a
t
e
_
l
e
g
a
c
y
(
)
;

	
	
	
	
}
 
e
l
s
e
 
{
 
/
/
w
e
 
n
e
e
d
 
t
o
 
d
e
l
e
t
e
 
r
o
o
m
s
 
a
n
d
 
t
a
r
i
f
f
s
 
f
o
r
 
t
h
i
s
 
r
o
o
m
 
t
y
p
e
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
 
u
s
e
r
 
s
e
l
e
c
t
e
d
 
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
t
o
 
b
e
 
0

	
	
	
	
	
$
i
 
=
 
0
;

	
	
	
	
	

	
	
	
	
	
/
/
d
e
l
e
t
e
 
a
l
l
 
r
o
o
m
s
 
o
f
 
t
h
i
s
 
t
y
p
e
 
i
f
 
p
o
s
s
i
b
l
e
 
(
i
f
 
r
o
o
m
s
 
d
o
n
`
t
 
h
a
v
e
 
a
n
y
 
u
p
c
o
m
i
n
g
 
b
o
o
k
i
n
g
s
)

	
	
	
	
	
i
f
 
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
 
>
 
0
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
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
 
a
s
 
$
r
_
u
i
d
)
 
{

	
	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
r
o
o
m
_
u
i
d
 
=
 
$
r
_
u
i
d
;


	
	
	
	
	
	
	
i
f
 
(
$
j
r
p
o
r
t
a
l
_
r
o
o
m
s
-
>
d
e
l
e
t
e
_
r
o
o
m
(
)
)
 
{

	
	
	
	
	
	
	
	
$
i
+
+
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}


	
	
	
	
	
/
/
d
e
l
e
t
e
 
r
a
t
e
 
f
o
r
 
t
h
i
s
 
r
o
o
m
 
t
y
p
e
,
 
b
u
t
 
o
n
l
y
 
i
f
 
a
l
l
 
r
o
o
m
s
 
o
f
 
t
h
i
s
 
t
y
p
e
 
c
o
u
l
d
 
b
e
 
d
e
l
e
t
e
d
 
(
d
o
n
`
t
 
h
a
v
e
 
a
n
y
 
u
p
c
o
m
i
n
g
 
b
o
o
k
i
n
g
s
)

	
	
	
	
	
i
f
 
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
 
>
 
0
 
&
&
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
_
u
i
d
s
_
c
o
u
n
t
 
=
=
 
$
i
)
 
{

	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
 
	
=
 
$
t
a
r
i
f
f
t
y
p
e
_
i
d
;

	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
r
a
t
e
s
_
u
i
d
 
	
	
=
 
$
r
a
t
e
s
_
u
i
d
;

	
	
	
	
	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
d
e
l
e
t
e
_
r
a
t
e
(
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
	
$
s
a
v
e
M
e
s
s
a
g
e
 
=
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
T
A
R
I
F
F
'
,
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
T
A
R
I
F
F
'
,
f
a
l
s
e
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
m
e
s
s
a
g
i
n
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
m
e
s
s
a
g
e
s
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
m
e
s
s
a
g
i
n
g
-
>
s
e
t
_
m
e
s
s
a
g
e
(
$
s
a
v
e
M
e
s
s
a
g
e
)
;

	
	

	
	
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
 
j
o
m
r
e
s
U
R
L
(
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
 
.
 
"
&
t
a
s
k
=
e
d
i
t
_
t
a
r
i
f
f
s
_
n
o
r
m
a
l
"
 
)
,
 
$
s
a
v
e
M
e
s
s
a
g
e
 
)
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
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
R
e
t
V
a
l
s
(
)

 
 
 
 
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

