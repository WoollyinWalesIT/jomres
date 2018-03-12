
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
d
o
b
o
o
k
i
n
g
'
)
;


c
l
a
s
s
 
j
0
5
0
0
0
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
b
k
g
 
=
 
n
e
w
 
b
o
o
k
i
n
g
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
b
o
o
k
i
n
g
O
b
j
e
c
t
 
=
 
$
b
k
g
;

 
 
 
 
 
 
 
 
$
b
k
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
O
b
j
e
c
t
;

 
 
 
 
 
 
 
 
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
b
k
-
>
e
r
r
o
r
_
c
o
d
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
O
b
j
e
c
t
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
b
k
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
A
J
A
X
C
A
L
L
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
 
=
 
n
e
w
 
b
o
o
k
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
u
p
p
r
e
s
s
_
o
u
t
p
u
t
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
O
b
j
e
c
t
 
=
 
$
b
k
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
O
b
j
e
c
t
;

 
 
 
 
 
 
 
 
 
 
 
 
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
b
k
-
>
e
r
r
o
r
_
c
o
d
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
O
b
j
e
c
t
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
b
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
m
o
v
e
_
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
(
'
t
o
u
r
i
s
t
_
t
a
x
'
,
 
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
T
o
t
a
l
s
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
t
o
r
e
B
o
o
k
i
n
g
D
e
t
a
i
l
s
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
o
u
r
i
s
t
_
t
a
x
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
o
u
r
i
s
t
_
t
a
x
'
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
f
l
o
a
t
)
 
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
o
u
r
i
s
t
_
t
a
x
'
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
"
>
'
.
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
T
O
U
R
I
S
T
_
T
A
X
_
N
O
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
T
O
U
R
I
S
T
_
T
A
X
_
N
O
T
E
'
)
.
'
<
/
p
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
p
 
c
l
a
s
s
=
"
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
"
>
'
.
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
T
O
U
R
I
S
T
_
T
A
X
_
N
O
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
T
O
U
R
I
S
T
_
T
A
X
_
N
O
T
E
'
)
.
'
<
/
p
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
O
b
j
e
c
t
;

 
 
 
 
}

}


i
f
 
(
!
c
l
a
s
s
_
e
x
i
s
t
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
'
)
)
 
{

 
 
 
 
c
l
a
s
s
 
b
o
o
k
i
n
g
 
e
x
t
e
n
d
s
 
d
o
b
o
o
k
i
n
g

 
 
 
 
{

 
 
 
 
 
 
 
 
/
*
*

 
 
 
 
 
 
 
 
 
*
 
C
r
e
a
t
e
s
 
t
h
e
 
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
 
d
a
t
e
 
i
n
p
u
t
 
a
n
d
 
r
e
t
u
r
n
s
 
i
t
 
a
s
 
a
 
v
a
l
u
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
 
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
$
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
e
V
a
l
u
e
,
 
$
m
y
I
D
 
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

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
g
i
v
e
 
t
h
e
 
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
 
d
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
 
a
 
r
a
n
d
o
m
 
n
a
m
e
 
b
e
c
a
u
s
e
 
i
t
 
w
i
l
l
 
b
e
 
c
a
l
l
e
d
 
b
y
 
b
o
t
h
 
t
h
e
 
c
o
m
p
o
n
e
n
t
 
a
n
d
 
m
o
d
u
l
e
s

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
q
u
e
I
D
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
I
f
 
t
h
i
s
 
d
a
t
e
 
p
i
c
k
e
r
 
i
s
 
"
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
"
 
t
h
e
n
 
w
e
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
a
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
i
n
p
u
t
 
n
a
m
e
 
t
o
o
,
 
t
h
e
n
 
s
e
t
 
i
t
 
i
n
 
s
h
o
w
t
i
m
e
.
 
W
i
t
h
 
t
h
a
t
 
w
e
'
l
l
 
b
e
 
a
b
l
e
 
t
o
 
t
e
l
l
 
t
h
i
s
 
s
e
t
 
o
f
 
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
 
w
h
a
t
 
t
h
e
 
i
d
 
o
f
 
t
h
e

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
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
 
i
s
 
s
o
 
t
h
a
t
 
i
t
 
c
a
n
 
s
e
t
 
i
t
'
s
 
d
a
t
e
 
w
h
e
n
 
t
h
i
s
 
o
n
e
 
c
h
a
n
g
e
s

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
e
l
d
N
a
m
e
 
!
=
 
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
l
i
s
t
(
$
u
s
e
c
,
 
$
s
e
c
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
 
'
,
 
m
i
c
r
o
t
i
m
e
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
t
_
s
r
a
n
d
(
$
s
e
c
 
*
 
$
u
s
e
c
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
s
i
b
l
e
 
=
 
'
A
B
C
D
E
F
G
H
I
J
K
L
M
N
O
P
Q
R
S
T
U
V
W
X
Y
Z
a
b
c
d
e
f
h
i
j
k
l
m
n
o
p
q
r
s
t
u
v
w
x
y
z
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
1
0
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
 
=
 
m
t
_
r
a
n
d
(
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
p
o
s
s
i
b
l
e
)
 
-
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
q
u
e
I
D
 
.
=
 
$
p
o
s
s
i
b
l
e
[
 
$
k
e
y
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
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
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
,
 
$
u
n
i
q
u
e
I
D
.
'
_
X
X
X
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
u
n
i
q
u
e
I
D
 
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
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
a
t
e
V
a
l
u
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
V
a
l
u
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
V
a
l
u
e
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
d
a
t
e
V
a
l
u
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
F
o
r
m
a
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
f
g
_
c
a
l
_
i
n
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
=
 
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
%
'
,
 
'
'
,
 
$
d
a
t
e
F
o
r
m
a
t
)
)
;
 
/
/
 
F
o
r
 
t
h
e
 
n
e
w
 
j
q
u
e
r
y
 
c
a
l
e
n
d
a
r
,
 
w
e
'
l
l
 
s
t
r
i
p
 
o
u
t
 
t
h
e
 
%
 
s
y
m
b
o
l
s
.
 
T
h
i
s
 
s
h
o
u
l
d
 
m
e
a
n
 
t
h
a
t
 
w
e
 
d
o
n
'
t
 
n
e
e
d
 
t
o
 
f
o
r
c
e
 
u
p
g
r
a
d
e
r
s
 
t
o
 
r
e
s
e
t
 
t
h
e
i
r
 
s
e
t
t
i
n
g
s
.

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
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
y
'
,
 
'
y
y
'
,
 
$
d
a
t
e
F
o
r
m
a
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
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
m
'
,
 
'
m
m
'
,
 
$
d
a
t
e
F
o
r
m
a
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
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
d
'
,
 
'
d
d
'
,
 
$
d
a
t
e
F
o
r
m
a
t
)
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
_
J
O
M
R
E
S
_
C
A
L
E
N
D
A
R
_
R
T
L
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
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
A
L
E
N
D
A
R
_
R
T
L
'
,
 
'
f
a
l
s
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
t
_
f
i
e
l
d
_
s
t
r
i
n
g
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
t
u
r
e
_
d
a
t
e
_
d
o
c
_
r
e
a
d
y
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
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
=
 
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
t
_
f
i
e
l
d
_
s
t
r
i
n
g
 
=
 
'

	
	
	
	
	
a
l
t
F
i
e
l
d
:
 
"
#
'
 
.
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
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
)
.
'
"
,


	
	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
o
n
c
h
a
n
g
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
n
c
l
o
s
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
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
=
 
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
c
f
g
_
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
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
n
c
h
a
n
g
e
 
.
=
 
'
 
g
e
t
R
e
s
p
o
n
s
e
_
p
a
r
t
i
c
u
l
a
r
s
(
\
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
\
'
,
t
h
i
s
.
v
a
l
u
e
)
;
 
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
n
c
h
a
n
g
e
 
.
=
 
'
 
a
j
a
x
A
D
a
t
e
(
t
h
i
s
.
v
a
l
u
e
,
\
'
'
.
$
t
h
i
s
-
>
c
f
g
_
c
a
l
_
i
n
p
u
t
.
'
\
'
)
;
 
g
e
t
R
e
s
p
o
n
s
e
_
p
a
r
t
i
c
u
l
a
r
s
(
\
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
\
'
,
t
h
i
s
.
v
a
l
u
e
,
\
'
'
.
$
u
n
i
q
u
e
I
D
.
'
\
'
)
;
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
n
c
h
a
n
g
e
 
.
=
 
'
 
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
.
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
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
)
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
\
'
o
p
t
i
o
n
\
'
,
 
{
m
i
n
D
a
t
e
:
 
j
o
m
r
e
s
J
q
u
e
r
y
(
t
h
i
s
)
.
d
a
t
e
p
i
c
k
e
r
(
\
'
g
e
t
D
a
t
e
\
'
)
}
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
n
c
l
o
s
e
 
.
=
 
'
 
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
.
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
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
)
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
\
'
s
h
o
w
\
'
)
;
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
n
c
h
a
n
g
e
 
.
=
 
'
 
g
e
t
R
e
s
p
o
n
s
e
_
p
a
r
t
i
c
u
l
a
r
s
(
\
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
\
'
,
t
h
i
s
.
v
a
l
u
e
)
;
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
z
e
 
=
 
'
 
s
i
z
e
=
"
1
0
"
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
p
u
t
_
c
l
a
s
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
z
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
p
u
t
_
c
l
a
s
s
 
=
 
'
 
i
n
p
u
t
-
s
m
a
l
l
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
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
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
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
 
=
 
'
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
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
"
>

	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
 
.
$
u
n
i
q
u
e
I
D
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
 
{

	
	
	
	
	
d
a
t
e
F
o
r
m
a
t
:
 
"
'
 
.
$
d
a
t
e
F
o
r
m
a
t
.
'
"
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
m
i
n
D
a
t
e
:
 
0
,
 
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
 
.
=
 
'
m
a
x
D
a
t
e
:
 
"
+
5
Y
"
,
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
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
 
&
&
 
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
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
 
=
=
 
'
2
'
)
 
|
|
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
b
u
t
t
o
n
I
m
a
g
e
:
 
\
'
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
c
a
l
e
n
d
a
r
.
p
n
g
\
'
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
s
3
_
i
c
o
n
 
=
 
'
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
 
.
=
 
'
b
u
t
t
o
n
T
e
x
t
:
 
"
"
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
s
3
_
i
c
o
n
 
=
 
'
<
s
p
a
n
 
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
-
g
r
o
u
p
-
a
d
d
o
n
"
 
i
d
=
"
d
p
_
t
r
i
g
g
e
r
_
'
.
$
u
n
i
q
u
e
I
D
.
'
"
>
<
s
p
a
n
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
a
l
e
n
d
a
r
"
>
<
/
s
p
a
n
>
<
/
s
p
a
n
>
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
 
.
=
 
'

	
	
	
	
	
a
u
t
o
S
i
z
e
:
t
r
u
e
,

	
	
	
	
	
b
u
t
t
o
n
I
m
a
g
e
O
n
l
y
:
 
t
r
u
e
,

	
	
	
	
	
s
h
o
w
O
n
:
 
"
b
o
t
h
"
,

	
	
	
	
	
c
h
a
n
g
e
M
o
n
t
h
:
 
t
r
u
e
,

	
	
	
	
	
c
h
a
n
g
e
Y
e
a
r
:
 
t
r
u
e
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
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
=
 
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
 
&
&
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
n
u
m
b
e
r
O
f
M
o
n
t
h
s
:
 
3
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
o
u
t
p
u
t
 
.
=
 
'
n
u
m
b
e
r
O
f
M
o
n
t
h
s
:
 
1
,
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
 
.
=
 
'
s
h
o
w
O
t
h
e
r
M
o
n
t
h
s
:
 
t
r
u
e
,

	
	
	
	
	
s
e
l
e
c
t
O
t
h
e
r
M
o
n
t
h
s
:
 
t
r
u
e
,

	
	
	
	
	
s
h
o
w
B
u
t
t
o
n
P
a
n
e
l
:
 
t
r
u
e
,
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
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
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
o
u
t
p
u
t
 
.
=
 
'
f
i
r
s
t
D
a
y
:
 
0
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
o
u
t
p
u
t
 
.
=
 
'
f
i
r
s
t
D
a
y
:
 
1
,
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
 
.
=
 
'
o
n
S
e
l
e
c
t
:
 
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
	
	
	
	
'
 
.
$
o
n
c
h
a
n
g
e
.
'

	
	
	
	
	
	
}
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
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
=
 
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
,
b
e
f
o
r
e
S
h
o
w
D
a
y
:
 
i
s
A
v
a
i
l
a
b
l
e
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
o
n
c
l
o
s
e
 
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
 
.
=
 
'
,
 
o
n
C
l
o
s
e
:
 
f
u
n
c
t
i
o
n
(
)
 
{
 
'
.
$
o
n
c
l
o
s
e
.
'
 
}
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
}
 
)
;


	
	
	
}
)
;
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
 
&
&
 
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
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
 
=
=
 
'
3
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
 
.
=
 
'

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
)
 
{
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
d
p
_
t
r
i
g
g
e
r
_
'
.
$
u
n
i
q
u
e
I
D
.
'
"
)
.
o
n
(
"
c
l
i
c
k
"
,
 
f
u
n
c
t
i
o
n
(
)
 
{
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
.
$
u
n
i
q
u
e
I
D
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
"
s
h
o
w
"
)
;
}
)
}
)
;

	
	
	
	
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
 
.
=
 
'

	
	
	
<
/
s
c
r
i
p
t
>

	
	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
r
e
a
d
o
n
l
y
=
"
r
e
a
d
o
n
l
y
"
 
s
t
y
l
e
=
"
c
u
r
s
o
r
:
p
o
i
n
t
e
r
;
 
b
a
c
k
g
r
o
u
n
d
-
c
o
l
o
r
:
 
#
F
F
F
F
F
F
;
"
 
'
 
.
$
s
i
z
e
.
'
 
c
l
a
s
s
=
"
'
.
$
i
n
p
u
t
_
c
l
a
s
s
.
'
 
f
o
r
m
-
c
o
n
t
r
o
l
 
i
n
p
u
t
-
g
r
o
u
p
"
 
n
a
m
e
=
"
'
.
$
f
i
e
l
d
N
a
m
e
.
'
"
 
i
d
=
"
'
.
$
u
n
i
q
u
e
I
D
.
'
"
 
v
a
l
u
e
=
"
'
.
$
d
a
t
e
V
a
l
u
e
.
'
"
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
/
>
'
.
$
b
s
3
_
i
c
o
n
.
'

	
	
	
'
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

