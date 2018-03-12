
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
c
h
a
r
t
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
h
a
r
t
 
=
 
'
'
;
 
/
/
t
h
e
 
g
e
n
e
r
a
t
e
d
 
c
h
a
r
t
/
g
r
a
p
h


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
y
p
e
 
=
 
'
l
i
n
e
'
;
 
/
/
l
i
n
e
,
 
b
a
r
,
 
r
a
d
a
r

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
i
t
l
e
 
=
 
'
E
x
a
m
p
l
e
 
C
h
a
r
t
'
;
 
/
/
 
s
t
r
i
n
g
 
c
h
a
r
t
 
t
i
t
l
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
i
t
l
e
_
c
l
a
s
s
 
=
 
'
p
a
n
e
l
-
d
e
f
a
u
l
t
'
;
 
/
/
 
s
t
r
i
n
g
 
c
h
a
r
t
 
t
i
t
l
e
 
c
l
a
s
s
,
 
e
g
:
 
"
p
a
n
e
l
-
d
e
f
a
u
l
t
"

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
 
'
E
x
a
m
p
l
e
 
c
h
a
r
t
 
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
;
 
/
/
 
s
t
r
i
n
g
 
c
h
a
r
t
 
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
 
e
g
:
 
"
T
o
t
a
l
 
s
a
l
e
s
 
p
e
r
 
m
o
n
t
h
"

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
b
e
l
s
 
=
 
a
r
r
a
y
(
'
J
a
n
'
,
 
'
F
e
b
'
,
 
'
M
a
r
'
,
 
'
A
p
r
'
,
 
'
M
a
y
'
,
 
'
J
u
n
'
,
 
'
J
u
l
'
,
 
'
A
u
g
'
,
 
'
S
e
p
'
,
 
'
O
c
t
'
,
 
'
N
o
v
'
,
 
'
D
e
c
'
)
;
 
/
/
 
a
r
r
a
y
 
o
f
 
X
 
a
x
i
s
 
l
a
b
e
l
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
r
l
 
=
 
'
'
;
 
/
/
u
r
l
 
t
o
 
f
u
l
l
 
p
a
g
e
 
c
h
a
r
t

	
	
$
t
h
i
s
-
>
h
e
i
g
h
t
 
=
 
'
a
u
t
o
'
;
 
/
/
c
h
a
r
t
 
h
e
i
g
h
t

	
	
$
t
h
i
s
-
>
i
s
_
w
i
d
g
e
t
 
=
 
f
a
l
s
e
;
 
/
/
s
e
t
 
t
h
i
s
 
t
o
 
t
r
u
e
 
t
o
 
u
s
e
 
t
h
e
 
w
i
d
g
e
t
 
o
p
t
i
m
i
z
e
d
 
t
e
m
p
l
a
t
e
s


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
b
e
l
 
=
 
'
E
x
a
m
p
l
e
 
d
a
t
a
 
s
e
t
'
;
 
/
/
 
n
a
m
e
 
o
f
 
t
h
e
 
d
a
t
a
 
s
e
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
,
 
r
a
n
d
(
1
0
,
 
1
0
0
)
)
;
 
/
/
d
a
t
a
 
a
r
r
a
y
 
f
o
r
 
t
h
e
 
Y
 
a
x
i
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
i
l
l
C
o
l
o
r
 
=
 
'
r
g
b
a
(
2
2
0
,
2
2
0
,
2
2
0
,
0
.
5
)
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
t
r
o
k
e
C
o
l
o
r
 
=
 
'
r
g
b
a
(
2
2
0
,
2
2
0
,
2
2
0
,
1
)
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
o
i
n
t
C
o
l
o
r
 
=
 
'
r
g
b
a
(
2
2
0
,
2
2
0
,
2
2
0
,
1
)
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r
 
=
 
'
#
f
f
f
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l
 
=
 
'
#
f
f
f
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e
 
=
 
'
r
g
b
a
(
2
2
0
,
2
2
0
,
2
2
0
,
1
)
'
;


 
 
 
 
 
 
 
 
/
*
 
A
r
r
a
y
 
o
f
 
d
a
t
a
 
s
e
t
s
 
f
o
r
 
t
h
i
s
 
c
h
a
r
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
s
e
t
s
[
]
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
l
a
b
e
l
'
 
	
	
	
	
=
 
'
S
a
l
e
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
a
'
 
	
	
	
	
	
=
 
a
r
r
a
y
 
(
 
r
a
n
d
(
1
0
,
1
0
0
)
,
r
a
n
d
(
1
0
,
1
0
0
)
,
r
a
n
d
(
1
0
,
1
0
0
)
,
r
a
n
d
(
1
0
,
1
0
0
)
,
r
a
n
d
(
1
0
,
1
0
0
)
,
r
a
n
d
(
1
0
,
1
0
0
)
,
r
a
n
d
(
1
0
,
1
0
0
)
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
f
i
l
l
C
o
l
o
r
'
 
	
	
	
=
 
"
r
g
b
a
(
2
2
0
,
2
2
0
,
2
2
0
,
0
.
5
)
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
s
t
r
o
k
e
C
o
l
o
r
'
 
	
	
	
=
 
"
r
g
b
a
(
2
2
0
,
2
2
0
,
2
2
0
,
1
)
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
i
n
t
C
o
l
o
r
'
	
	
	
=
 
"
r
g
b
a
(
2
2
0
,
2
2
0
,
2
2
0
,
1
)
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r
'
 
	
	
=
 
"
#
f
f
f
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l
'
 
	
=
 
"
#
f
f
f
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e
'
	
=
 
"
r
g
b
a
(
2
2
0
,
2
2
0
,
2
2
0
,
1
)
"

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
s
e
t
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


 
 
 
 
 
 
 
 
/
/
i
n
c
l
u
d
e
 
t
h
e
 
c
h
a
r
t
.
j
s
 
i
n
 
t
h
e
 
h
e
a
d

 
 
 
 
 
 
 
 
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
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
c
h
a
r
t
.
j
s
/
d
i
s
t
/
'
,
 
'
C
h
a
r
t
.
m
i
n
.
j
s
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
 
g
e
t
_
c
h
a
r
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
l
e
g
e
n
d
_
r
o
w
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


 
 
 
 
 
 
 
 
/
/
b
u
i
l
d
 
c
h
a
r
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
u
i
l
d
_
c
h
a
r
t
(
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
c
h
a
r
t
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
I
T
L
E
'
]
 
=
 
$
t
h
i
s
-
>
t
i
t
l
e
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
I
T
L
E
_
C
L
A
S
S
'
]
 
=
 
$
t
h
i
s
-
>
t
i
t
l
e
_
c
l
a
s
s
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
$
t
h
i
s
-
>
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
C
H
A
R
T
'
]
 
=
 
$
t
h
i
s
-
>
c
h
a
r
t
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
U
R
L
'
]
 
=
 
$
t
h
i
s
-
>
u
r
l
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
$
t
h
i
s
-
>
i
s
_
w
i
d
g
e
t
)
 
{

	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
s
h
o
w
_
c
h
a
r
t
.
h
t
m
l
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
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
w
i
d
g
e
t
_
s
h
o
w
_
c
h
a
r
t
.
h
t
m
l
'
)
;

	
	
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
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
 
b
u
i
l
d
_
c
h
a
r
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
r
o
w
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
p
a
g
e
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
'
C
H
A
R
T
_
T
Y
P
E
'
]
 
=
 
$
t
h
i
s
-
>
t
y
p
e
;


 
 
 
 
 
 
 
 
/
/
X
-
a
x
i
s
 
l
a
b
e
l
s

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
L
A
B
E
L
S
'
]
 
=
 
'
"
'
.
i
m
p
l
o
d
e
(
'
"
,
 
"
'
,
 
$
t
h
i
s
-
>
l
a
b
e
l
s
)
.
'
"
'
;


 
 
 
 
 
 
 
 
/
/
i
f
 
t
h
e
r
e
`
s
 
n
o
 
d
a
t
a
 
i
n
 
t
h
e
 
d
a
t
a
s
e
t
,
 
u
s
e
 
s
a
m
p
l
e
 
d
a
t
a

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
d
a
t
a
s
e
t
s
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
d
a
t
a
s
e
t
s
[
0
]
 
=
 
$
t
h
i
s
-
>
d
a
t
a
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
d
a
t
a
s
e
t
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
r
 
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
l
a
b
e
l

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
'
l
a
b
e
l
'
,
 
$
v
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
L
A
B
E
L
'
]
 
=
 
$
v
[
'
l
a
b
e
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
L
A
B
E
L
'
]
 
=
 
$
t
h
i
s
-
>
l
a
b
e
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
a
t
a

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
'
d
a
t
a
'
,
 
$
v
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
D
A
T
A
'
]
 
=
 
i
m
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
v
[
'
d
a
t
a
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
D
A
T
A
'
]
 
=
 
i
m
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
t
h
i
s
-
>
d
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
f
i
l
l
C
o
l
o
r

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
'
f
i
l
l
C
o
l
o
r
'
,
 
$
v
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
f
i
l
l
C
o
l
o
r
'
]
 
=
 
$
v
[
'
f
i
l
l
C
o
l
o
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
f
i
l
l
C
o
l
o
r
'
]
 
=
 
$
t
h
i
s
-
>
f
i
l
l
C
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
s
t
r
o
k
e
C
o
l
o
r

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
'
s
t
r
o
k
e
C
o
l
o
r
'
,
 
$
v
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
s
t
r
o
k
e
C
o
l
o
r
'
]
 
=
 
$
v
[
'
s
t
r
o
k
e
C
o
l
o
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
s
t
r
o
k
e
C
o
l
o
r
'
]
 
=
 
$
t
h
i
s
-
>
s
t
r
o
k
e
C
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
p
o
i
n
t
C
o
l
o
r

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
'
p
o
i
n
t
C
o
l
o
r
'
,
 
$
v
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
p
o
i
n
t
C
o
l
o
r
'
]
 
=
 
$
v
[
'
p
o
i
n
t
C
o
l
o
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
p
o
i
n
t
C
o
l
o
r
'
]
 
=
 
$
t
h
i
s
-
>
p
o
i
n
t
C
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
'
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r
'
,
 
$
v
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r
'
]
 
=
 
$
v
[
'
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r
'
]
 
=
 
$
t
h
i
s
-
>
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l
'
,
 
$
v
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l
'
]
 
=
 
$
v
[
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l
'
]
 
=
 
$
t
h
i
s
-
>
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e
'
,
 
$
v
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e
'
]
 
=
 
$
v
[
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e
'
]
 
=
 
$
t
h
i
s
-
>
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
k
 
+
 
1
,
 
$
t
h
i
s
-
>
d
a
t
a
s
e
t
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
C
O
M
M
A
'
]
 
=
 
'
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
C
O
M
M
A
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
c
h
a
r
t
 
f
i
x
e
d
 
h
e
i
g
h
t

	
	
$
o
u
t
p
u
t
[
'
H
E
I
G
H
T
'
]
 
=
 
$
t
h
i
s
-
>
h
e
i
g
h
t
;

	
	

	
	
/
/
a
s
p
e
c
t
 
r
a
t
i
o
 
i
f
 
w
e
 
h
a
v
e
 
a
 
f
i
x
e
d
 
h
e
i
g
h
t

	
	
$
o
u
t
p
u
t
[
'
M
A
I
N
T
A
I
N
_
A
S
P
E
C
T
_
R
A
T
I
O
'
]
 
=
 
'
t
r
u
e
'
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
h
e
i
g
h
t
 
!
=
 
'
a
u
t
o
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
'
M
A
I
N
T
A
I
N
_
A
S
P
E
C
T
_
R
A
T
I
O
'
]
 
=
 
'
f
a
l
s
e
'
;

	
	
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
A
N
D
O
M
_
I
D
'
]
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
c
h
a
r
t
.
h
t
m
l
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
c
h
a
r
t
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
}

}

