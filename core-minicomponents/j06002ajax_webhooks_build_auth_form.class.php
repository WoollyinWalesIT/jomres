
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
a
j
a
x
_
w
e
b
h
o
o
k
s
_
b
u
i
l
d
_
a
u
t
h
_
f
o
r
m
 
{

 
 
 
 
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
f
o
u
n
d
_
w
e
b
h
o
o
k
_
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
7
3
0
0
'
]
 
a
s
 
$
e
v
e
n
t
N
a
m
e
 
=
>
 
$
e
v
e
n
t
D
e
t
a
i
l
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
$
f
o
u
n
d
_
w
e
b
h
o
o
k
_
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
[
]
=
$
e
v
e
n
t
N
a
m
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
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
f
o
u
n
d
_
w
e
b
h
o
o
k
_
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
"
E
r
r
o
r
:
 
O
o
p
s
,
 
y
o
u
 
c
a
n
'
t
 
c
r
e
a
t
e
 
a
 
n
e
w
 
W
e
b
h
o
o
k
 
i
n
t
e
g
r
a
t
i
o
n
 
u
n
t
i
l
 
y
o
u
'
v
e
 
i
n
s
t
a
l
l
e
d
 
a
t
 
l
e
a
s
t
 
o
n
e
 
w
e
b
h
o
o
k
 
i
n
t
e
g
r
a
t
i
o
n
 
m
e
t
h
o
d
/
p
l
u
g
i
n
"
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
r
e
t
V
a
l
s
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
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
[
 
'
a
u
t
h
_
m
e
t
h
o
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
h
_
m
e
t
h
o
d
 
 
 
 
 
 
 
 
=
 
(
s
t
r
i
n
g
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
[
 
'
a
u
t
h
_
m
e
t
h
o
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
g
r
a
t
i
o
n
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
[
 
'
i
n
t
e
g
r
a
t
i
o
n
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
a
u
t
h
_
m
e
t
h
o
d
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
h
_
m
e
t
h
o
d
 
 
 
 
 
 
 
 
=
 
(
s
t
r
i
n
g
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
R
E
Q
U
E
S
T
,
 
'
a
u
t
h
_
m
e
t
h
o
d
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
g
r
a
t
i
o
n
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
R
E
Q
U
E
S
T
,
 
'
i
n
t
e
g
r
a
t
i
o
n
_
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
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
[
'
o
u
t
p
u
t
_
n
o
w
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
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
[
'
o
u
t
p
u
t
_
n
o
w
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
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
P
o
i
n
t
F
i
l
e
p
a
t
h
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
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
"
w
e
b
h
o
o
k
s
"
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
s
 
=
 
n
e
w
 
w
e
b
h
o
o
k
s
(
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
i
d
)
;

 
 
 
 
 
 
 
 
$
a
l
l
_
w
e
b
h
o
o
k
s
 
=
 
$
w
e
b
h
o
o
k
s
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
w
e
b
h
o
o
k
s
(
)
;

 
 
 
 
 
 
 
 
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
a
l
l
_
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
)
)

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
 
=
 
$
a
l
l
_
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
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
7
3
0
0
'
)
;
 
 
/
/
 
A
s
 
t
h
e
 
a
u
t
h
e
n
t
i
c
a
t
i
o
n
 
m
e
t
h
o
d
s
 
a
r
e
n
'
t
 
r
e
l
e
v
e
n
t
 
t
o
 
f
r
o
n
t
 
o
r
 
b
a
c
k
e
n
d
 
t
h
e
y
 
a
r
e
 
n
u
m
b
e
r
e
d
 
i
n
 
t
h
e
 
0
7
0
0
0
s

 
 
 
 
 
 
 
 
$
a
u
t
h
e
n
t
i
c
a
t
i
o
n
_
m
e
t
h
o
d
s
 
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
a
u
t
h
e
n
t
i
c
a
t
i
o
n
_
m
e
t
h
o
d
s
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
a
u
t
h
e
n
t
i
c
a
t
i
o
n
_
m
e
t
h
o
d
s
[
$
a
u
t
h
_
m
e
t
h
o
d
]
)
)

 
 
 
 
 
 
 
 
 
 
 
 
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
 
A
u
t
h
e
n
t
i
c
a
t
i
o
n
 
m
e
t
h
o
d
 
n
o
t
 
r
e
c
o
g
n
i
s
e
d
.
'
)
;


 
 
 
 
 
 
 
 
$
s
n
i
p
p
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

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
r
e
s
u
l
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
u
t
h
e
n
t
i
c
a
t
i
o
n
_
m
e
t
h
o
d
s
[
$
a
u
t
h
_
m
e
t
h
o
d
]
[
'
f
i
e
l
d
s
'
]
 
a
s
 
$
k
e
y
 
=
>
 
$
s
e
t
t
i
n
g
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
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
[
'
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
[
$
k
e
y
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
[
'
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
[
$
k
e
y
]
 
=
 
$
s
e
t
t
i
n
g
[
'
d
e
f
a
u
l
t
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 


 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
s
e
t
t
i
n
g
[
'
f
o
r
m
a
t
'
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
b
o
o
l
e
a
n
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
b
o
o
l
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
[
'
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
[
$
k
e
y
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
i
n
p
u
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
i
n
p
u
t
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
[
'
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
[
$
k
e
y
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
a
s
s
w
o
r
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
p
a
s
s
w
o
r
d
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
[
'
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
[
$
k
e
y
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
a
r
e
a
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
a
r
e
a
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
[
'
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
[
$
k
e
y
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
h
t
m
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
h
t
m
l
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
[
'
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
[
$
k
e
y
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
e
l
e
c
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
s
e
l
e
c
t
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
[
'
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
[
$
k
e
y
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
n
i
p
p
e
t
s
[
]
[
'
S
N
I
P
P
E
T
'
]
 
=
 
$
r
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
N
O
T
E
S
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
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
a
u
t
h
e
n
t
i
c
a
t
i
o
n
_
m
e
t
h
o
d
s
[
$
a
u
t
h
_
m
e
t
h
o
d
]
[
'
n
o
t
e
s
'
]
)
)

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
N
O
T
E
S
'
]
 
=
 
$
a
u
t
h
e
n
t
i
c
a
t
i
o
n
_
m
e
t
h
o
d
s
[
$
a
u
t
h
_
m
e
t
h
o
d
]
[
'
n
o
t
e
s
'
]
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
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
_
a
u
t
h
_
m
e
t
h
o
d
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
s
n
i
p
p
e
t
s
'
,
 
$
s
n
i
p
p
e
t
s
)
;

 
 
 
 
 
 
 
 
$
f
o
r
m
 
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

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
f
o
r
m
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
r
e
t
V
a
l
s
 
=
 
$
f
o
r
m
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
A
l
l
o
w
s
 
g
a
t
e
w
a
y
 
d
e
v
e
l
o
p
e
r
s
 
t
o
 
s
u
p
p
l
y
 
t
h
e
i
r
 
o
w
n
 
h
t
m
l
 
i
f

 
 
 
 
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
s
n
i
p
p
e
t
_
h
t
m
l
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
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
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
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
H
T
M
L
'
]
 
=
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
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
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
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
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
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
]
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
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
_
s
n
i
p
p
e
t
_
h
t
m
l
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
s
n
i
p
p
e
t
_
a
r
e
a
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
 
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
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
V
A
L
U
E
'
]
 
=
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
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
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
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
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
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
]
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
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
_
s
n
i
p
p
e
t
_
a
r
e
a
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
s
n
i
p
p
e
t
_
i
n
p
u
t
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
 
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
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
V
A
L
U
E
'
]
 
=
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
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
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
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
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
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
]
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
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
_
s
n
i
p
p
e
t
_
i
n
p
u
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
s
n
i
p
p
e
t
_
p
a
s
s
w
o
r
d
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
 
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
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
V
A
L
U
E
'
]
 
=
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
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
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
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
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
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
]
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
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
_
s
n
i
p
p
e
t
_
p
a
s
s
w
o
r
d
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
s
n
i
p
p
e
t
_
b
o
o
l
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
 
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
$
y
e
s
n
o
 
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
y
e
s
n
o
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
,
 
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
N
O
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
N
O
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

 
 
 
 
 
 
 
 
$
y
e
s
n
o
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
,
 
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
Y
E
S
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
Y
E
S
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


 
 
 
 
 
 
 
 
$
i
n
p
u
t
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
$
i
n
d
e
x
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
)
;


 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
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
S
W
I
T
C
H
'
]
 
=
 
$
i
n
p
u
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
T
I
T
L
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
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
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
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
]
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
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
_
s
n
i
p
p
e
t
_
b
o
o
l
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
s
n
i
p
p
e
t
_
s
e
l
e
c
t
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
 
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
 
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
s
e
t
t
i
n
g
[
'
o
p
t
i
o
n
s
'
]
)
 
&
&
 
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
s
e
t
t
i
n
g
[
'
o
p
t
i
o
n
s
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
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
s
e
t
t
i
n
g
[
'
o
p
t
i
o
n
s
'
]
 
a
s
 
$
s
e
l
e
c
t
i
o
n
 
=
>
 
$
t
e
x
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
s
e
l
e
c
t
i
o
n
,
 
$
t
e
x
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
p
u
t
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
$
i
n
d
e
x
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
w
e
b
h
o
o
k
_
s
e
t
t
i
n
g
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
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
S
W
I
T
C
H
'
]
 
=
 
$
i
n
p
u
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
T
I
T
L
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
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
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
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
]
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
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
_
s
n
i
p
p
e
t
_
s
e
l
e
c
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}
