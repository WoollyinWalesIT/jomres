
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
0
s
h
o
w
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
h
e
a
d
e
r

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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
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
t
a
s
k
'
 
=
>
 
'
s
h
o
w
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
h
e
a
d
e
r
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
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
H
E
A
D
E
R
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
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
0
 
=
>
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
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
H
E
A
D
E
R
_
A
R
G
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
U
I
D
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
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
 
e
l
s
e
 
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
;

 
 
 
 
 
 
 
 
}

	
	

	
	
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
 
=
=
 
0
)
 
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
!
u
s
e
r
_
c
a
n
_
v
i
e
w
_
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
)
 
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
t
m
p
B
o
o
k
i
n
g
H
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
P
R
O
P
E
R
T
Y
_
U
I
D
'
]
 
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
s
h
o
w
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
h
e
a
d
e
r
 
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
R
E
Q
U
E
S
T
,
 
'
s
h
o
w
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
h
e
a
d
e
r
'
,
 
1
)
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
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
h
e
a
d
e
r
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
s
t
a
r
s

 
 
 
 
 
 
 
 
$
s
t
a
r
s
 
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
s
t
a
r
s
;

 
 
 
 
 
 
 
 
$
s
t
a
r
s
l
i
n
k
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
b
l
a
n
k
.
p
n
g
"
 
b
o
r
d
e
r
=
"
0
"
 
H
E
I
G
H
T
=
"
1
"
 
h
s
p
a
c
e
=
"
1
0
"
 
V
S
P
A
C
E
=
"
1
"
 
a
l
t
=
"
b
l
a
n
k
"
 
/
>
'
;

 
 
 
 
 
 
 
 
i
f
 
(
$
s
t
a
r
s
 
!
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
s
l
i
n
k
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
$
s
t
a
r
s
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
s
l
i
n
k
 
.
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
s
t
a
r
.
p
n
g
"
 
b
o
r
d
e
r
=
"
0
"
 
a
l
t
=
"
s
t
a
r
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
s
l
i
n
k
 
.
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
s
u
p
e
r
i
o
r
 
=
=
 
1
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
S
U
P
E
R
I
O
R
'
 
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
s
u
p
e
r
i
o
r
.
p
n
g
"
 
a
l
t
=
"
s
u
p
e
r
i
o
r
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
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
[
 
'
S
U
P
E
R
I
O
R
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
i
m
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
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
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
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
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
u
i
d
,
 
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
'
)
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
M
A
G
E
L
A
R
G
E
'
 
]
 
=
 
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
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
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
'
]
[
0
]
[
0
]
[
'
l
a
r
g
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
I
M
A
G
E
M
E
D
I
U
M
'
 
]
 
=
 
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
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
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
'
]
[
0
]
[
0
]
[
'
m
e
d
i
u
m
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
I
M
A
G
E
T
H
U
M
B
'
 
]
 
=
 
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
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
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
'
]
[
0
]
[
0
]
[
'
s
m
a
l
l
'
]
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
 
f
e
a
t
u
r
e
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
F
E
A
T
U
R
E
S
'
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
s
h
o
w
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
f
e
a
t
u
r
e
s
'
,
 
a
r
r
a
y
(
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
u
i
d
'
 
=
>
 
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
 
'
s
h
o
w
_
f
e
a
t
u
r
e
_
c
a
t
e
g
o
r
i
e
s
'
 
=
>
 
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
p
r
o
p
e
r
t
y
 
r
o
o
m
 
t
y
p
e
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
R
O
O
M
T
Y
P
E
S
'
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
s
h
o
w
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
t
y
p
e
s
'
,
 
a
r
r
a
y
(
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
u
i
d
'
 
=
>
 
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
)
;


 
 
 
 
 
 
 
 
/
/
m
e
t
a
 
d
a
t
a

 
 
 
 
 
 
 
 
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
m
e
t
a
t
i
t
l
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
m
e
t
a
d
a
t
a
(
'
t
i
t
l
e
'
,
 
j
o
m
r
e
s
_
p
u
r
i
f
y
_
h
t
m
l
(
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
m
e
t
a
t
i
t
l
e
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
n
a
m
e
 
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
N
a
m
e
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
s
e
t
m
e
t
a
d
a
t
a
(
'
t
i
t
l
e
'
,
 
j
o
m
r
e
s
_
p
u
r
i
f
y
_
h
t
m
l
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
n
a
m
e
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
m
e
t
a
d
a
t
a
(
'
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
 
j
o
m
r
e
s
_
p
u
r
i
f
y
_
h
t
m
l
(
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
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
m
e
t
a
d
a
t
a
(
'
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
 
j
o
m
r
e
s
_
p
u
r
i
f
y
_
h
t
m
l
(
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
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
m
e
t
a
d
a
t
a
(
'
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
 
j
o
m
r
e
s
_
p
u
r
i
f
y
_
h
t
m
l
(
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
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
m
e
t
a
d
a
t
a
(
'
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
.
'
,
 
'
.
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
.
'
,
 
'
.
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
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
F
a
c
e
b
o
o
k
 
m
e
t
a
 
d
a
t
a

 
 
 
 
 
 
 
 
$
s
h
o
r
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
_
d
e
c
o
d
e
(
j
r
_
s
u
b
s
t
r
(
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
)
,
 
0
,
 
2
0
0
)
)
.
'
.
.
.
'
;

 
 
 
 
 
 
 
 
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
c
u
s
t
o
m
t
a
g
(
'
<
m
e
t
a
 
p
r
o
p
e
r
t
y
=
"
o
g
:
u
r
l
"
 
c
o
n
t
e
n
t
=
"
'
.
g
e
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
_
u
r
l
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
 
'
n
o
s
e
f
'
)
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
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
c
u
s
t
o
m
t
a
g
(
'
<
m
e
t
a
 
p
r
o
p
e
r
t
y
=
"
o
g
:
t
y
p
e
"
 
c
o
n
t
e
n
t
=
"
a
r
t
i
c
l
e
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
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
c
u
s
t
o
m
t
a
g
(
'
<
m
e
t
a
 
p
r
o
p
e
r
t
y
=
"
o
g
:
t
i
t
l
e
"
 
c
o
n
t
e
n
t
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
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
)
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
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
c
u
s
t
o
m
t
a
g
(
'
<
m
e
t
a
 
p
r
o
p
e
r
t
y
=
"
o
g
:
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
"
 
c
o
n
t
e
n
t
=
"
'
.
$
s
h
o
r
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
s
c
r
i
p
t
i
o
n
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
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
c
u
s
t
o
m
t
a
g
(
'
<
m
e
t
a
 
p
r
o
p
e
r
t
y
=
"
o
g
:
i
m
a
g
e
"
 
c
o
n
t
e
n
t
=
"
'
.
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
M
A
G
E
L
A
R
G
E
'
 
]
.
'
"
 
/
>
'
)
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
 
d
e
t
a
i
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
S
T
A
R
S
'
 
]
 
=
 
$
s
t
a
r
s
l
i
n
k
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
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
 
]
 
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
T
R
E
E
T
'
 
]
 
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
O
W
N
'
 
]
 
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
R
E
G
I
O
N
'
 
]
 
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
O
U
N
T
R
Y
'
 
]
 
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
P
O
S
T
C
O
D
E
'
 
]
 
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
E
L
E
P
H
O
N
E
'
 
]
 
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
F
A
X
'
 
]
 
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
;

 

	
	
$
u
s
e
r
_
c
a
n
_
v
i
e
w
_
a
d
d
r
e
s
s
 
=
 
t
r
u
e
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
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
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
u
s
e
r
_
c
a
n
_
v
i
e
w
_
a
d
d
r
e
s
s
 
=
 
f
a
l
s
e
;

	
	
}


	
	
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
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
'
]
 
=
=
 
'
1
'
 
&
&
 
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
 
>
 
0
 
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
g
u
e
s
t
s
 
W
H
E
R
E
 
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
 
=
 
'
"
.
(
i
n
t
)
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
.
"
'
 
A
N
D
 
`
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
`
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
 
L
I
M
I
T
 
1
"
;

	
	
	
$
x
i
s
t
i
n
g
G
u
e
s
t
s
 
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
x
i
s
t
i
n
g
G
u
e
s
t
s
)
)
 
{

	
	
	
	
$
u
s
e
r
_
c
a
n
_
v
i
e
w
_
a
d
d
r
e
s
s
 
=
 
t
r
u
e
;

	
	
	
}

	
	
}

	
	

	
	
i
f
 
(
 
!
$
u
s
e
r
_
c
a
n
_
v
i
e
w
_
a
d
d
r
e
s
s
 
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
S
T
R
E
E
T
'
 
]
 
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
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
P
L
A
C
E
H
O
L
D
E
R
'
,
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
P
L
A
C
E
H
O
L
D
E
R
'
,
 
f
a
l
s
e
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
p
e
r
m
i
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

 
 
 
 
 
 
 
 
i
f
 
(
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
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
r
m
i
t
[
0
]
[
 
'
P
E
R
M
I
T
_
N
U
M
B
E
R
'
 
]
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
r
m
i
t
[
0
]
[
 
'
_
J
O
M
R
E
S
_
P
E
R
M
I
T
_
N
U
M
B
E
R
_
T
I
T
L
E
'
 
]
 
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
P
E
R
M
I
T
_
N
U
M
B
E
R
_
T
I
T
L
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
P
E
R
M
I
T
_
N
U
M
B
E
R
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
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
P
R
O
P
E
R
T
Y
_
L
A
T
'
]
 
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
l
a
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
P
R
O
P
E
R
T
Y
_
L
O
N
G
'
]
 
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
l
o
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
S
H
O
R
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
h
o
r
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
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
]
 
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
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
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
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
f
a
l
s
e
)
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
 
p
r
i
c
e
s
 
f
r
o
m

 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
g
e
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
p
r
i
c
e
_
f
o
r
_
d
i
s
p
l
a
y
_
i
n
_
l
i
s
t
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
u
i
d
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
P
R
I
C
E
'
]
 
=
 
$
p
r
i
c
e
[
'
P
R
I
C
E
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
P
R
E
_
T
E
X
T
'
]
 
=
 
$
p
r
i
c
e
[
'
P
R
E
_
T
E
X
T
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
P
O
S
T
_
T
E
X
T
'
]
 
=
 
$
p
r
i
c
e
[
'
P
O
S
T
_
T
E
X
T
'
]
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
n
t
a
c
t
 
d
e
t
a
i
l
s
 
o
v
e
r
r
i
d
e

 
 
 
 
 
 
 
 
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
o
v
e
r
r
i
d
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
_
c
o
n
t
a
c
t
_
d
e
t
a
i
l
s
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
o
v
e
r
r
i
d
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
_
c
o
n
t
a
c
t
_
t
e
l
'
]
 
!
=
 
'
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
T
E
L
E
P
H
O
N
E
'
 
]
 
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
o
v
e
r
r
i
d
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
_
c
o
n
t
a
c
t
_
t
e
l
'
]
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
o
v
e
r
r
i
d
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
_
c
o
n
t
a
c
t
_
f
a
x
'
]
 
!
=
 
'
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
F
A
X
'
 
]
 
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
o
v
e
r
r
i
d
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
_
c
o
n
t
a
c
t
_
f
a
x
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
[
 
'
T
E
L
E
P
H
O
N
E
'
 
]
 
!
=
 
'
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
H
T
E
L
E
P
H
O
N
E
'
 
]
 
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
H
E
A
D
E
R
_
T
E
L
E
P
H
O
N
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
H
E
A
D
E
R
_
T
E
L
E
P
H
O
N
E
'
)
.
'
:
 
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
[
 
'
F
A
X
'
 
]
 
!
=
 
'
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
H
F
A
X
'
 
]
 
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
H
E
A
D
E
R
_
F
A
X
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
H
E
A
D
E
R
_
F
A
X
'
)
.
'
:
 
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
e
x
t
e
r
n
a
l
 
l
i
n
k

 
 
 
 
 
 
 
 
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
g
a
l
l
e
r
y
L
i
n
k
'
 
]
)
 
&
&
 
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
g
a
l
l
e
r
y
L
i
n
k
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
h
t
t
p
:
/
/
w
w
w
.
w
o
r
l
d
o
f
w
e
b
c
r
a
f
t
.
c
o
m
/
b
l
o
g
.
p
h
p
?
i
d
=
2
5
0

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
=
 
'
/
[
^
\
p
L
\
p
N
$
-
_
.
+
!
*
\
'
\
(
\
)
\
,
\
{
\
}
\
|
\
\
\
\
\
^
\
~
\
[
\
]
`
\
<
\
>
\
#
\
%
\
"
\
;
\
/
\
?
\
:
\
@
\
&
\
=
\
.
]
/
u
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
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
$
p
a
t
t
e
r
n
,
 
'
'
,
 
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
g
a
l
l
e
r
y
L
i
n
k
'
 
]
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
G
A
L
L
E
R
Y
L
I
N
K
'
 
]
 
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
3
8
;
#
3
8
;
a
m
p
;
'
,
 
'
&
'
,
 
$
u
r
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
m
a
i
n
 
=
 
p
a
r
s
e
_
u
r
l
(
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
3
8
;
#
3
8
;
a
m
p
;
'
,
 
'
&
'
,
 
$
u
r
l
)
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
G
A
L
L
E
R
Y
D
O
M
A
I
N
'
 
]
 
=
 
$
d
o
m
a
i
n
[
 
'
h
o
s
t
'
 
]
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
J
O
M
R
E
S
_
T
A
P
T
O
C
A
L
L
'
 
]
 
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
J
O
M
R
E
S
_
T
A
P
T
O
C
A
L
L
'
,
 
'
J
O
M
R
E
S
_
T
A
P
T
O
C
A
L
L
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
/
/
s
h
o
r
t
l
i
s
t
/
f
a
v
o
u
r
i
t
e
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
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
[
 
'
s
h
o
r
t
l
i
s
t
_
i
t
e
m
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
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
[
 
'
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
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
[
 
'
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
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
s
h
o
r
t
l
i
s
t
_
i
t
e
m
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
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
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
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
c
o
m
p
_
m
u
f
a
v
o
u
r
i
t
e
s
 
W
H
E
R
E
 
`
m
y
_
i
d
`
 
=
 
'
"
.
(
i
n
t
)
 
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
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
y
s
 
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
p
r
o
p
y
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
r
o
p
y
s
 
a
s
 
$
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
,
 
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
[
]
 
=
 
(
i
n
t
)
 
$
p
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
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
[
 
'
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
'
 
]
 
=
 
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
o
u
t
p
u
t
[
'
T
E
X
T
'
]
 
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
D
D
T
O
S
H
O
R
T
L
I
S
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
D
D
T
O
S
H
O
R
T
L
I
S
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
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
F
R
O
N
T
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
s
h
o
r
t
l
i
s
t
_
r
e
m
o
v
e
d
_
t
e
x
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
s
h
o
r
t
l
i
s
t
_
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
o
u
t
p
u
t
[
 
'
S
H
O
R
T
L
I
S
T
'
 
]
 
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
o
u
t
p
u
t
[
'
T
E
X
T
'
]
 
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
R
E
M
O
V
E
F
R
O
M
S
H
O
R
T
L
I
S
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
R
E
M
O
V
E
F
R
O
M
S
H
O
R
T
L
I
S
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
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
F
R
O
N
T
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
s
h
o
r
t
l
i
l
s
t
_
a
d
d
e
d
_
t
e
x
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
s
h
o
r
t
l
i
s
t
_
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
o
u
t
p
u
t
[
 
'
S
H
O
R
T
L
I
S
T
'
 
]
 
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


 
 
 
 
 
 
 
 
/
/
a
p
p
r
o
v
a
l
 
l
a
b
e
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
]
 
=
=
 
'
1
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
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
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
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
V
A
L
'
 
]
 
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
B
O
O
K
I
N
G
_
O
N
R
E
Q
U
E
S
T
'
,
 
'
_
B
O
O
K
I
N
G
_
O
N
R
E
Q
U
E
S
T
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
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
V
A
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
w
a
r
n
i
n
g
'
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
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
V
A
L
'
 
]
 
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
B
O
O
K
I
N
G
_
I
N
S
T
A
N
T
'
,
 
'
_
B
O
O
K
I
N
G
_
I
N
S
T
A
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
R
E
Q
U
I
R
E
_
A
P
P
R
O
V
A
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
s
u
c
c
e
s
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
r
e
v
i
e
w
s
 
l
i
n
k

 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
s
_
l
i
n
k
 
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
u
s
e
_
r
e
v
i
e
w
s
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
r
e
v
i
e
w
s
_
l
i
n
k
[
0
]
[
'
R
E
V
I
E
W
S
_
L
I
N
K
'
]
 
=
 
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
'
&
t
a
s
k
=
s
h
o
w
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
e
v
i
e
w
s
&
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
'
.
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
r
e
v
i
e
w
s
_
l
i
n
k
[
0
]
[
'
R
E
V
I
E
W
S
_
T
E
X
T
'
]
 
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
R
E
V
I
E
W
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
R
E
V
I
E
W
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
a
g
e
n
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
A
G
E
N
T
_
L
I
N
K
'
 
]
 
=
 
m
a
k
e
_
a
g
e
n
t
_
l
i
n
k
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
o
u
t
p
u
t
[
 
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
G
E
N
T
'
 
]
 
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
G
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
G
E
N
T
'
)
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
 
b
u
t
t
o
n
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
D
I
R
E
C
T
_
U
R
L
'
 
]
 
=
 
g
e
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
_
u
r
l
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
o
u
t
p
u
t
[
 
'
C
O
N
T
A
C
T
_
L
I
N
K
'
 
]
 
=
 
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
c
o
n
t
a
c
t
o
w
n
e
r
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
=
'
.
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
o
u
t
p
u
t
[
 
'
H
C
O
N
T
A
C
T
'
 
]
 
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
'
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
S
H
O
R
T
L
I
S
T
_
L
I
N
K
'
 
]
 
=
 
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
s
h
o
w
_
s
h
o
r
t
l
i
s
t
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
i
e
s
'
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
H
S
H
O
R
T
L
I
S
T
'
 
]
 
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
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
F
A
V
O
U
R
I
T
E
S
'
,
 
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
F
A
V
O
U
R
I
T
E
S
'
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
H
M
A
P
'
 
]
 
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
H
E
A
D
E
R
_
M
A
P
P
I
N
G
L
I
N
K
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
H
E
A
D
E
R
_
M
A
P
P
I
N
G
L
I
N
K
'
)
;


 
 
 
 
 
 
 
 
/
/
b
o
o
k
i
n
g
 
b
u
t
t
o
n

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
l
i
n
k
 
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
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
'
 
]
 
=
=
 
'
1
'
 
&
&
 
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
h
o
w
_
b
o
o
k
i
n
g
_
f
o
r
m
_
i
n
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
 
]
 
!
=
 
'
1
'
 
&
&
 
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
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
u
r
l
 
=
 
g
e
t
_
b
o
o
k
i
n
g
_
u
r
l
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
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
f
i
x
e
d
A
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
Y
e
s
N
o
'
 
]
 
=
=
 
'
1
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
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
]
 
=
=
 
'
1
'
)
)
 
&
&
 
!
i
s
s
e
t
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
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
[
 
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
 
]
)
)
 
{
 
/
/
 
W
e
'
l
l
 
a
d
d
 
a
n
 
i
n
v
a
l
i
d
 
a
r
r
i
v
a
l
 
d
a
t
e
 
i
f
 
t
h
e
 
f
i
x
e
d
 
a
r
r
i
v
a
l
 
d
a
t
e
 
s
e
t
t
i
n
g
 
i
s
 
s
e
t
 
t
o
 
Y
e
s
.
 
T
h
i
s
 
w
a
y
 
w
e
 
c
a
n
 
f
o
r
c
e
 
t
h
e
 
b
o
o
k
i
n
g
 
e
n
g
i
n
e
 
t
o
 
s
e
e
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
i
s
 
w
r
o
n
g
 
a
n
d
 
i
t
'
l
l
 
r
e
b
u
i
l
d
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
r
o
o
m
s
 
l
i
s
t
,
 
w
h
i
c
h
 
i
t
 
d
o
e
s
n
'
t
 
i
f
 
t
h
e
 
d
a
t
e
 
i
s
 
c
o
r
r
e
c
t
 
w
h
e
n
 
c
o
m
i
n
g
 
f
r
o
m
 
t
h
e
 
B
o
o
k
 
a
 
r
o
o
m
 
l
i
n
k
.

 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
.
=
 
'
&
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
=
2
0
0
9
-
0
1
-
0
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
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
$
u
r
l
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
L
I
N
K
'
 
]
 
=
 
$
u
r
l
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
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
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
l
i
n
k
[
 
'
T
E
X
T
'
 
]
 
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
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
'
_
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
T
E
X
T
'
 
]
 
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
Y
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
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
l
i
n
k
[
 
'
T
E
X
T
'
 
]
 
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
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
'
_
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
T
E
X
T
'
 
]
 
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
A
R
O
O
M
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
A
R
O
O
M
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
f
a
c
e
b
o
o
k
 
b
u
t
t
o
n
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
F
A
C
E
B
O
O
K
_
B
U
T
T
O
N
S
'
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
s
h
o
w
_
f
a
c
e
b
o
o
k
_
b
u
t
t
o
n
s
'
,
 
a
r
r
a
y
(
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
u
i
d
'
 
=
>
 
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
F
R
O
N
T
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
e
v
i
e
w
s
_
l
i
n
k
'
,
 
$
r
e
v
i
e
w
s
_
l
i
n
k
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
b
o
o
k
i
n
g
l
i
n
k
'
,
 
$
b
o
o
k
i
n
g
l
i
n
k
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
e
r
m
i
t
'
,
 
$
p
e
r
m
i
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
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
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
d
i
s
p
l
a
y
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
!
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
)
 
|
|
 
e
m
p
t
y
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
1
0
7
0
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
 
O
p
t
i
o
n
a
l
 
p
o
s
t
 
h
e
a
d
e
r
 
d
i
s
p
l
a
y

 
 
 
 
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

