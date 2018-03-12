
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
p
r
o
p
e
r
t
y

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
J
R
U
s
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
r
_
u
s
e
r
'
)
;


 
 
 
 
 
 
 
 
$
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
 
i
n
t
v
a
l
(
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
,
 
0
)
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
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
 
>
 
0
 
&
&
 
!
i
n
_
a
r
r
a
y
(
$
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
,
 
$
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
e
d
'
 
]
 
=
=
 
'
0
'
 
&
&
 
$
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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

 
 
 
 
 
 
 
 
}

	
	

	
	
$
p
u
b
l
i
s
h
e
d
 
=
 
0
;

	
	
$
a
p
p
r
o
v
e
d
 
=
 
0
;

	
	

	
	
/
/
j
o
m
r
e
s
 
p
r
o
p
e
r
t
i
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
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
'
)
;

	
	

	
	
/
/
g
e
t
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s

	
	
i
f
 
(
$
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
 
>
 
0
)
 
{

	
	
	
$
c
u
r
r
e
n
t
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
c
u
r
r
e
n
t
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
)
;

	
	
	

	
	
	
$
p
u
b
l
i
s
h
e
d
 
=
 
$
c
u
r
r
e
n
t
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
p
u
b
l
i
s
h
e
d
;

	
	
	
$
a
p
p
r
o
v
e
d
 
=
 
$
c
u
r
r
e
n
t
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
a
p
p
r
o
v
e
d
;

	
	
}


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
s
_
u
i
d
 
=
 
$
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
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
n
a
m
e
 
=
 
t
r
i
m
(
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
p
r
o
p
e
r
t
y
_
n
a
m
e
'
,
 
'
'
)
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
p
r
o
p
e
r
t
i
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
s
t
r
e
e
t
 
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
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
'
,
 
'
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
p
r
o
p
e
r
t
i
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
t
o
w
n
 
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
p
r
o
p
e
r
t
y
_
t
o
w
n
'
,
 
'
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
p
r
o
p
e
r
t
i
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
r
e
g
i
o
n
 
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
e
g
i
o
n
'
,
 
'
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
p
r
o
p
e
r
t
i
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
p
o
s
t
c
o
d
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
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
'
,
 
'
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
p
r
o
p
e
r
t
i
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
t
e
l
 
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
p
r
o
p
e
r
t
y
_
t
e
l
'
,
 
'
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
p
r
o
p
e
r
t
i
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
f
a
x
 
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
p
r
o
p
e
r
t
y
_
f
a
x
'
,
 
'
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
p
r
o
p
e
r
t
i
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
e
m
a
i
l
 
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
p
r
o
p
e
r
t
y
_
e
m
a
i
l
'
,
 
'
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
p
r
o
p
e
r
t
i
e
s
-
>
m
e
t
a
t
i
t
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
e
t
a
t
i
t
l
e
'
,
 
'
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
p
r
o
p
e
r
t
i
e
s
-
>
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
 
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
e
t
a
d
e
s
c
r
i
p
t
i
o
n
'
,
 
'
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
p
r
o
p
e
r
t
i
e
s
-
>
m
e
t
a
k
e
y
w
o
r
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
m
e
t
a
k
e
y
w
o
r
d
s
'
,
 
'
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
p
r
o
p
e
r
t
i
e
s
-
>
p
r
i
c
e
 
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
p
r
i
c
e
'
,
 
'
'
)
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
p
r
o
p
e
r
t
i
e
s
-
>
l
a
t
 
=
 
p
a
r
s
e
F
l
o
a
t
(
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
l
a
t
'
,
 
'
'
)
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
p
r
o
p
e
r
t
i
e
s
-
>
l
o
n
g
 
=
 
p
a
r
s
e
F
l
o
a
t
(
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
l
o
n
g
'
,
 
'
'
)
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
p
r
o
p
e
r
t
i
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
s
i
t
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
p
r
o
p
e
r
t
y
_
s
i
t
e
_
i
d
'
,
 
'
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
p
r
o
p
e
r
t
i
e
s
-
>
p
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
p
r
o
p
e
r
t
y
T
y
p
e
'
,
 
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
p
r
o
p
e
r
t
i
e
s
-
>
s
t
a
r
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
s
t
a
r
s
'
,
 
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
p
r
o
p
e
r
t
i
e
s
-
>
s
u
p
e
r
i
o
r
 
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
s
u
p
e
r
i
o
r
'
,
 
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
p
r
o
p
e
r
t
i
e
s
-
>
c
a
t
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
c
a
t
_
i
d
'
,
 
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
p
r
o
p
e
r
t
i
e
s
-
>
p
e
r
m
i
t
_
n
u
m
b
e
r
 
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
p
e
r
m
i
t
_
n
u
m
b
e
r
'
,
 
'
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
p
r
o
p
e
r
t
i
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
f
e
a
t
u
r
e
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
p
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
-
>
p
u
b
l
i
s
h
e
d
 
=
 
$
p
u
b
l
i
s
h
e
d
;

	
	
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
-
>
a
p
p
r
o
v
e
d
 
=
 
$
a
p
p
r
o
v
e
d
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
c
o
u
n
t
r
y

 
 
 
 
 
 
 
 
i
f
 
(
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
l
i
m
i
t
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
c
o
u
n
t
r
y
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
c
o
u
n
t
r
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
c
o
u
n
t
r
y
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
c
o
u
n
t
r
y
 
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
l
i
m
i
t
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
c
o
u
n
t
r
y
_
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
h
t
m
l
 
e
d
i
t
o
r
 
f
i
e
l
d
s

 
 
 
 
 
 
 
 
i
f
 
(
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
a
l
l
o
w
H
T
M
L
e
d
i
t
o
r
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
s
c
r
i
p
t
i
o
n
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
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
s
c
r
i
p
t
i
o
n
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
h
e
c
k
i
n
_
t
i
m
e
s
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
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
h
e
c
k
i
n
_
t
i
m
e
s
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
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
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
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
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
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
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
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
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
'
,
 
'
'
)
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
p
r
o
p
e
r
t
i
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
d
e
s
c
r
i
p
t
i
o
n
 
=
 
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
$
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
s
c
r
i
p
t
i
o
n
,
 
'
<
p
>
<
b
r
>
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
p
r
o
p
e
r
t
i
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
c
h
e
c
k
i
n
_
t
i
m
e
s
 
=
 
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
$
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
h
e
c
k
i
n
_
t
i
m
e
s
,
 
'
<
p
>
<
b
r
>
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
p
r
o
p
e
r
t
i
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
 
=
 
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
$
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
,
 
'
<
p
>
<
b
r
>
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
p
r
o
p
e
r
t
i
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
 
=
 
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
$
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
,
 
'
<
p
>
<
b
r
>
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
p
r
o
p
e
r
t
i
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
a
i
r
p
o
r
t
s
 
=
 
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
$
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
,
 
'
<
p
>
<
b
r
>
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
p
r
o
p
e
r
t
i
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
 
=
 
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
$
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
,
 
'
<
p
>
<
b
r
>
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
p
r
o
p
e
r
t
i
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
=
 
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
$
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
,
 
'
<
p
>
<
b
r
>
'
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
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
d
e
s
c
r
i
p
t
i
o
n
 
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
s
c
r
i
p
t
i
o
n
'
,
 
'
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
p
r
o
p
e
r
t
i
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
c
h
e
c
k
i
n
_
t
i
m
e
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
h
e
c
k
i
n
_
t
i
m
e
s
'
,
 
'
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
p
r
o
p
e
r
t
i
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
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
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
'
,
 
'
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
p
r
o
p
e
r
t
i
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
'
,
 
'
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
p
r
o
p
e
r
t
i
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
a
i
r
p
o
r
t
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
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
'
,
 
'
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
p
r
o
p
e
r
t
i
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
 
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
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
'
,
 
'
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
p
r
o
p
e
r
t
i
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
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
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
n
e
w
 
p
r
o
p
e
r
t
y

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
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
p
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


 
 
 
 
 
 
 
 
/
/
s
a
v
e
 
m
e
s
s
a
g
e

 
 
 
 
 
 
 
 
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
S
A
V
E
_
U
P
D
A
T
E
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
/
/
s
e
n
d
 
a
p
p
r
o
v
a
l
 
e
m
a
i
l
 
t
o
 
s
i
t
e
 
a
d
m
i
n

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
_
a
p
p
r
o
v
e
_
n
e
w
_
p
r
o
p
e
r
t
i
e
s
'
]
 
=
=
 
0
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
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
_
A
D
M
I
N
.
'
&
t
a
s
k
=
p
r
o
p
e
r
t
y
_
a
p
p
r
o
v
a
l
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
j
e
c
t
 
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
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
S
U
B
J
E
C
T
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
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
.
'
 
(
'
.
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
n
a
m
e
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
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
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
C
O
N
T
E
N
T
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
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
f
a
l
s
e
)
.
$
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
$
s
u
b
j
e
c
t
,
 
$
m
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
0
4
9
0
2
 
t
r
i
g
g
e
r
 
p
o
i
n
t
 
(
u
p
d
a
t
e
 
o
r
 
d
e
l
e
t
e
 
f
r
o
m
 
j
i
n
t
o
u
r
 
p
r
o
p
e
r
t
i
e
s
 
t
a
b
l
e
)

 
 
 
 
 
 
 
 
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
4
9
0
2
'
,
 
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
;


 
 
 
 
 
 
 
 
/
/
r
e
d
i
r
e
c
t
 
b
a
c
k
 
t
o
 
e
d
i
t
 
p
r
o
p
e
r
t
y
 
p
a
g
e

 
 
 
 
 
 
 
 
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
r
l
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
'
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
 
e
n
c
o
d
e
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
$
s
t
r
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
t
r
i
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
<
'
,
 
'
&
#
6
0
;
'
,
 
$
s
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
$
s
t
r
i
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
>
'
,
 
'
&
#
6
2
;
'
,
 
$
s
t
r
i
n
g
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
t
r
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
 
c
o
n
v
e
r
t
_
l
e
s
s
g
r
e
a
t
e
r
t
h
a
n
s
(
$
s
t
r
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
t
r
i
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
&
#
6
0
;
'
,
 
'
<
'
,
 
$
s
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
$
s
t
r
i
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
&
#
6
2
;
'
,
 
'
>
'
,
 
$
s
t
r
i
n
g
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
t
r
i
n
g
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

