
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
u
s
e
r
_
b
u
d
g
e
t

{

 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
o
n
s
t
r
u
c
t
o
r
 
f
o
r
 
t
h
e
 
j
o
m
r
e
s
_
b
o
o
k
i
n
g
 
o
b
j
e
c
t
,
 
s
e
t
s
 
a
 
b
u
n
c
h
 
o
f
 
v
a
r
i
a
b
l
e
s
,
 
f
i
n
d
s
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
s
e
t
t
i
n
g
s
 
&
 
g
e
t
s
 
t
h
e
 
c
u
r
r
e
n
t
 
s
t
a
t
e
 
o
f
 
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
 
f
r
o
m
 
t
h
e
 
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
 
t
a
b
l
e
.

 
 
 
 
 
*
/

 
 
 
 
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
[
 
'
b
u
d
g
e
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
b
u
d
g
e
t
'
 
]
 
=
 
0
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
t
_
b
u
d
g
e
t
(
$
b
u
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
[
 
'
b
u
d
g
e
t
'
 
]
 
=
 
(
i
n
t
)
 
$
b
u
d
g
e
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
 
g
e
t
_
b
u
d
g
e
t
(
$
w
i
t
h
_
c
u
r
r
e
n
c
y
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
i
f
 
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
[
 
'
b
u
d
g
e
t
'
 
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
w
i
t
h
_
c
u
r
r
e
n
c
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
o
u
t
p
u
t
_
p
r
i
c
e
(
(
i
n
t
)
 
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
[
 
'
b
u
d
g
e
t
'
 
]
,
 
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
(
i
n
t
)
 
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
[
 
'
b
u
d
g
e
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
'
'
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
 
g
e
t
_
b
u
d
g
e
t
_
d
r
o
p
d
o
w
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
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
o
u
t
p
u
t
[
'
B
U
D
G
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
G
U
E
S
T
_
B
U
D
G
E
T
'
,
 
'
G
U
E
S
T
_
B
U
D
G
E
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
o
u
t
p
u
t
[
'
F
I
G
U
R
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
g
e
t
_
b
u
d
g
e
t
(
t
r
u
e
)
;


 
 
 
 
 
 
 
 
$
p
r
i
c
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
g
e
t
_
p
r
i
c
e
_
r
a
n
g
e
s
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
r
i
c
e
s
)
)
 
{

	
	
	


 
 
 
 
 
 
 
 
$
h
i
g
h
e
s
t
_
p
r
i
c
e
 
=
 
m
a
x
(
$
p
r
i
c
e
s
)
;

 
 
 
 
 
 
 
 
$
r
a
n
g
e
 
=
 
$
h
i
g
h
e
s
t
_
p
r
i
c
e
 
/
 
1
0
;


 
 
 
 
 
 
 
 
$
r
a
n
g
e
s
 
=
 
r
a
n
g
e
(
m
i
n
(
$
p
r
i
c
e
s
)
,
 
m
a
x
(
$
p
r
i
c
e
s
)
 
+
 
$
r
a
n
g
e
,
 
$
r
a
n
g
e
)
;


 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
c
a
n
 
b
e
 
c
a
l
l
e
d
 
v
i
a
 
e
i
t
h
e
r
 
t
h
e
 
"
s
e
a
r
c
h
"
 
t
a
s
k
,
 
o
r
 
m
o
r
e
 
c
o
m
p
l
i
c
a
t
e
d
l
y
 
t
h
r
o
u
g
h
 
a
j
a
x
 
s
e
a
r
c
h
.
 
I
f
 
i
t
 
i
s
,
 
i
n
s
t
e
a
d
 
o
f
 
h
a
v
i
n
g
 
a
 
s
i
m
p
l
e
 
j
s
 
f
u
n
c
t
i
o
n
 
t
o
 
c
a
l
l
 
w
e
 
n
e
e
d
 
t
o
 
c
a
l
l
 
a
 
d
i
f
f
e
r
e
n
t
 
o
n
e
,
 
u
s
i
n
g
 
t
h
e
 
f
o
r
m
 
n
a
m
e
 
v
a
r
i
a
b
l
e
.
 
I
n
c
i
d
e
n
t
l
y
,
 
t
h
i
s
 
i
s
 
t
h
e
 
s
a
m
e
 
o
n
c
l
i
c
k
 
f
u
n
c
t
i
o
n
 
t
h
a
t
'
s
 
u
s
e
d
 
t
o
 
r
e
t
u
r
n
 
t
o
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s
.
 
I
f
 
w
e
 
d
i
d
n
'
t
 
d
o
 
t
h
i
s
,
 
c
l
i
c
k
i
n
g
 
o
n
 
t
h
e
 
d
r
o
p
d
o
w
n
 
a
f
t
e
r
 
d
o
i
n
g
 
a
n
 
a
j
a
x
 
s
e
a
r
c
h
 
w
o
u
l
d
 
r
e
l
o
a
d
 
t
h
e
 
c
u
r
r
e
n
t
 
p
a
g
e
,
 
e
.
g
.
 
"
v
i
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
"
 
o
r
 
s
o
m
e
s
u
c
h
.

 
 
 
 
 
 
 
 
$
o
n
c
l
i
c
k
 
=
 
f
a
l
s
e
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
j
a
x
_
s
e
a
r
c
h
_
f
o
r
m
_
n
a
m
e
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
n
c
l
i
c
k
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
i
f
 
(
(
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
J
O
M
R
E
S
_
N
O
H
T
M
L
'
)
 
&
&
 
J
O
M
R
E
S
_
N
O
H
T
M
L
 
=
=
 
0
)
 
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
t
a
s
k
'
)
 
=
=
 
'
a
j
a
x
_
s
e
a
r
c
h
_
f
i
l
t
e
r
'
)
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
g
e
t
_
b
u
d
g
e
t
(
t
r
u
e
)
 
!
=
 
'
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
R
E
S
E
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
C
O
M
_
A
_
R
E
S
E
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
j
a
x
_
s
e
a
r
c
h
_
f
o
r
m
_
n
a
m
e
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
O
N
C
L
I
C
K
'
 
]
 
=
 
'
o
n
c
l
i
c
k
=
"
s
e
t
_
b
u
d
g
e
t
(
 
0
 
,
 
t
r
u
e
 
,
 
\
'
\
'
)
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
r
m
n
a
m
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
j
a
x
_
s
e
a
r
c
h
_
f
o
r
m
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
O
N
C
L
I
C
K
'
 
]
 
=
 
'
o
n
c
l
i
c
k
=
"
s
e
t
_
b
u
d
g
e
t
(
 
0
 
,
 
f
a
l
s
e
 
,
 
\
'
'
.
$
f
o
r
m
n
a
m
e
.
'
\
'
)
;
 
"
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
n
g
e
s
 
a
s
 
$
r
a
n
g
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
a
n
g
e
 
>
 
0
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
r
a
n
g
e
,
 
'
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
r
[
 
'
F
I
G
U
R
E
'
 
]
 
=
 
$
r
a
n
g
e
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
j
a
x
_
s
e
a
r
c
h
_
f
o
r
m
_
n
a
m
e
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
O
N
C
L
I
C
K
'
 
]
 
=
 
'
o
n
c
l
i
c
k
=
"
s
e
t
_
b
u
d
g
e
t
(
'
.
$
r
a
n
g
e
.
'
,
 
t
r
u
e
 
,
 
\
'
\
'
)
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
r
m
n
a
m
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
j
a
x
_
s
e
a
r
c
h
_
f
o
r
m
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
O
N
C
L
I
C
K
'
 
]
 
=
 
'
o
n
c
l
i
c
k
=
"
s
e
t
_
b
u
d
g
e
t
(
'
.
$
r
a
n
g
e
.
'
 
,
 
f
a
l
s
e
 
,
 
\
'
'
.
$
f
o
r
m
n
a
m
e
.
'
\
'
)
;
 
"
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
l
i
s
t
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
_
b
u
d
g
e
t
_
d
r
o
p
d
o
w
n
.
h
t
m
l
'
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
 
'
'
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
 
g
e
t
_
p
r
i
c
e
_
r
a
n
g
e
s
(
)

 
 
 
 
{

	
	
$
p
r
i
c
e
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
_
A
B
S
P
A
T
H
.
'
p
r
i
c
e
_
r
a
n
g
e
s
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
 
=
 
f
i
l
e
m
t
i
m
e
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
_
A
B
S
P
A
T
H
.
'
p
r
i
c
e
_
r
a
n
g
e
s
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
=
 
t
i
m
e
(
)
 
-
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
>
 
3
6
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
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
_
A
B
S
P
A
T
H
.
'
p
r
i
c
e
_
r
a
n
g
e
s
.
p
h
p
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
p
r
i
c
e
s
 
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
_
A
B
S
P
A
T
H
.
'
p
r
i
c
e
_
r
a
n
g
e
s
.
p
h
p
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
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
_
A
B
S
P
A
T
H
.
'
p
r
i
c
e
_
r
a
n
g
e
s
.
p
h
p
'
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
p
r
i
c
e
s
)
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
 
D
I
S
T
I
N
C
T
 
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
r
a
t
e
s
 
W
H
E
R
E
 
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
 
>
 
'
0
'
 
L
I
M
I
T
 
1
0
0
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
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


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
I
s
 
J
i
n
t
o
u
r
 
i
n
s
t
a
l
l
e
d
?

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
u
r
_
p
r
i
c
e
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
j
i
n
t
o
u
r
_
g
e
t
_
t
o
u
r
s
_
f
o
r
_
a
r
r
d
e
p
_
d
a
t
e
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
D
I
S
T
I
N
C
T
 
(
C
A
S
E
 
W
H
E
N
 
`
p
r
i
c
e
_
a
d
u
l
t
s
`
 
>
 
0
 
T
H
E
N
 
`
p
r
i
c
e
_
a
d
u
l
t
s
`
 
E
L
S
E
 
`
p
r
i
c
e
_
k
i
d
s
`
 
E
N
D
)
 
A
S
 
p
r
i
c
e
 
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
j
i
n
t
o
u
r
_
t
o
u
r
s
 
L
I
M
I
T
 
1
0
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
u
r
_
p
r
i
c
e
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

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
a
t
e
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
r
a
t
e
s
 
a
s
 
$
r
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
a
t
e
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
t
o
u
r
_
p
r
i
c
e
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
t
o
u
r
_
p
r
i
c
e
s
 
a
s
 
$
p
r
i
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
p
r
i
c
e
-
>
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
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
e
s
u
l
t
s
 
a
s
 
$
l
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
u
n
d
e
d
 
=
 
c
e
i
l
(
$
l
o
w
 
/
 
1
0
)
 
*
 
1
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
u
n
d
e
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
s
[
]
 
=
 
$
r
o
u
n
d
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
s
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
p
r
i
c
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
n
a
t
s
o
r
t
(
$
p
r
i
c
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
s
 
=
 
a
r
r
a
y
_
v
a
l
u
e
s
(
$
p
r
i
c
e
s
)
;
 
/
/
 
R
e
s
e
t
t
i
n
g
 
t
h
e
 
k
e
y
s
 
f
o
r
 
"
r
a
n
g
e
"

 
 
 
 
 
 
 
 
 
 
 
 
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
_
A
B
S
P
A
T
H
.
'
p
r
i
c
e
_
r
a
n
g
e
s
.
p
h
p
'
,
 
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
p
r
i
c
e
s
)
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
p
r
i
c
e
s
;

 
 
 
 
}

}

