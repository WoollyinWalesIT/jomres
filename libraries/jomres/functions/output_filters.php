
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


f
u
n
c
t
i
o
n
 
x
s
s
_
c
l
e
a
n
(
$
d
a
t
a
)

{

 
 
 
 
/
/
 
F
i
x
 
&
e
n
t
i
t
y
\
n
;

 
 
 
 
$
d
a
t
a
 
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
a
r
r
a
y
(
'
&
a
m
p
;
'
,
 
'
&
l
t
;
'
,
 
'
&
g
t
;
'
)
,
 
a
r
r
a
y
(
'
&
a
m
p
;
a
m
p
;
'
,
 
'
&
a
m
p
;
l
t
;
'
,
 
'
&
a
m
p
;
g
t
;
'
)
,
 
$
d
a
t
a
)
;

 
 
 
 
$
d
a
t
a
 
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
'
/
(
&
#
*
\
w
+
)
[
\
x
0
0
-
\
x
2
0
]
+
;
/
u
'
,
 
'
$
1
;
'
,
 
$
d
a
t
a
)
;

 
 
 
 
$
d
a
t
a
 
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
'
/
(
&
#
x
*
[
0
-
9
A
-
F
]
+
)
;
*
/
i
u
'
,
 
'
$
1
;
'
,
 
$
d
a
t
a
)
;

 
 
 
 
$
d
a
t
a
 
=
 
h
t
m
l
_
e
n
t
i
t
y
_
d
e
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
 
E
N
T
_
C
O
M
P
A
T
,
 
'
U
T
F
-
8
'
)
;


 
 
 
 
/
/
 
R
e
m
o
v
e
 
a
n
y
 
a
t
t
r
i
b
u
t
e
 
s
t
a
r
t
i
n
g
 
w
i
t
h
 
"
o
n
"
 
o
r
 
x
m
l
n
s

 
 
 
 
$
d
a
t
a
 
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
'
#
(
<
[
^
>
]
+
?
[
\
x
0
0
-
\
x
2
0
"
\
'
]
)
(
?
:
o
n
|
x
m
l
n
s
)
[
^
>
]
*
+
>
#
i
u
'
,
 
'
$
1
>
'
,
 
$
d
a
t
a
)
;


 
 
 
 
/
/
 
R
e
m
o
v
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
:
 
a
n
d
 
v
b
s
c
r
i
p
t
:
 
p
r
o
t
o
c
o
l
s

 
 
 
 
$
d
a
t
a
 
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
'
#
(
[
a
-
z
]
*
)
[
\
x
0
0
-
\
x
2
0
]
*
=
[
\
x
0
0
-
\
x
2
0
]
*
(
[
`
\
'
"
]
*
)
[
\
x
0
0
-
\
x
2
0
]
*
j
[
\
x
0
0
-
\
x
2
0
]
*
a
[
\
x
0
0
-
\
x
2
0
]
*
v
[
\
x
0
0
-
\
x
2
0
]
*
a
[
\
x
0
0
-
\
x
2
0
]
*
s
[
\
x
0
0
-
\
x
2
0
]
*
c
[
\
x
0
0
-
\
x
2
0
]
*
r
[
\
x
0
0
-
\
x
2
0
]
*
i
[
\
x
0
0
-
\
x
2
0
]
*
p
[
\
x
0
0
-
\
x
2
0
]
*
t
[
\
x
0
0
-
\
x
2
0
]
*
:
#
i
u
'
,
 
'
$
1
=
$
2
n
o
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
.
.
.
'
,
 
$
d
a
t
a
)
;

 
 
 
 
$
d
a
t
a
 
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
'
#
(
[
a
-
z
]
*
)
[
\
x
0
0
-
\
x
2
0
]
*
=
(
[
\
'
"
]
*
)
[
\
x
0
0
-
\
x
2
0
]
*
v
[
\
x
0
0
-
\
x
2
0
]
*
b
[
\
x
0
0
-
\
x
2
0
]
*
s
[
\
x
0
0
-
\
x
2
0
]
*
c
[
\
x
0
0
-
\
x
2
0
]
*
r
[
\
x
0
0
-
\
x
2
0
]
*
i
[
\
x
0
0
-
\
x
2
0
]
*
p
[
\
x
0
0
-
\
x
2
0
]
*
t
[
\
x
0
0
-
\
x
2
0
]
*
:
#
i
u
'
,
 
'
$
1
=
$
2
n
o
v
b
s
c
r
i
p
t
.
.
.
'
,
 
$
d
a
t
a
)
;

 
 
 
 
$
d
a
t
a
 
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
'
#
(
[
a
-
z
]
*
)
[
\
x
0
0
-
\
x
2
0
]
*
=
(
[
\
'
"
]
*
)
[
\
x
0
0
-
\
x
2
0
]
*
-
m
o
z
-
b
i
n
d
i
n
g
[
\
x
0
0
-
\
x
2
0
]
*
:
#
u
'
,
 
'
$
1
=
$
2
n
o
m
o
z
b
i
n
d
i
n
g
.
.
.
'
,
 
$
d
a
t
a
)
;


 
 
 
 
/
/
 
O
n
l
y
 
w
o
r
k
s
 
i
n
 
I
E
:
 
<
s
p
a
n
 
s
t
y
l
e
=
"
w
i
d
t
h
:
 
e
x
p
r
e
s
s
i
o
n
(
a
l
e
r
t
(
'
P
i
n
g
!
'
)
)
;
"
>
<
/
s
p
a
n
>

 
 
 
 
$
d
a
t
a
 
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
'
#
(
<
[
^
>
]
+
?
)
s
t
y
l
e
[
\
x
0
0
-
\
x
2
0
]
*
=
[
\
x
0
0
-
\
x
2
0
]
*
[
`
\
'
"
]
*
.
*
?
e
x
p
r
e
s
s
i
o
n
[
\
x
0
0
-
\
x
2
0
]
*
\
(
[
^
>
]
*
+
>
#
i
'
,
 
'
$
1
>
'
,
 
$
d
a
t
a
)
;

 
 
 
 
$
d
a
t
a
 
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
'
#
(
<
[
^
>
]
+
?
)
s
t
y
l
e
[
\
x
0
0
-
\
x
2
0
]
*
=
[
\
x
0
0
-
\
x
2
0
]
*
[
`
\
'
"
]
*
.
*
?
b
e
h
a
v
i
o
u
r
[
\
x
0
0
-
\
x
2
0
]
*
\
(
[
^
>
]
*
+
>
#
i
'
,
 
'
$
1
>
'
,
 
$
d
a
t
a
)
;

 
 
 
 
$
d
a
t
a
 
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
'
#
(
<
[
^
>
]
+
?
)
s
t
y
l
e
[
\
x
0
0
-
\
x
2
0
]
*
=
[
\
x
0
0
-
\
x
2
0
]
*
[
`
\
'
"
]
*
.
*
?
s
[
\
x
0
0
-
\
x
2
0
]
*
c
[
\
x
0
0
-
\
x
2
0
]
*
r
[
\
x
0
0
-
\
x
2
0
]
*
i
[
\
x
0
0
-
\
x
2
0
]
*
p
[
\
x
0
0
-
\
x
2
0
]
*
t
[
\
x
0
0
-
\
x
2
0
]
*
:
*
[
^
>
]
*
+
>
#
i
u
'
,
 
'
$
1
>
'
,
 
$
d
a
t
a
)
;


 
 
 
 
/
/
 
R
e
m
o
v
e
 
n
a
m
e
s
p
a
c
e
d
 
e
l
e
m
e
n
t
s
 
(
w
e
 
d
o
 
n
o
t
 
n
e
e
d
 
t
h
e
m
)

 
 
 
 
$
d
a
t
a
 
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
'
#
<
/
*
\
w
+
:
\
w
[
^
>
]
*
+
>
#
i
'
,
 
'
'
,
 
$
d
a
t
a
)
;


 
 
 
 
d
o
 
{

 
 
 
 
 
 
 
 
/
/
 
R
e
m
o
v
e
 
r
e
a
l
l
y
 
u
n
w
a
n
t
e
d
 
t
a
g
s

 
 
 
 
 
 
 
 
$
o
l
d
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
;

 
 
 
 
 
 
 
 
$
d
a
t
a
 
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
'
#
<
/
*
(
?
:
a
p
p
l
e
t
|
b
(
?
:
a
s
e
|
g
s
o
u
n
d
|
l
i
n
k
)
|
e
m
b
e
d
|
f
r
a
m
e
(
?
:
s
e
t
)
?
|
i
(
?
:
f
r
a
m
e
|
l
a
y
e
r
)
|
l
(
?
:
a
y
e
r
|
i
n
k
)
|
m
e
t
a
|
o
b
j
e
c
t
|
s
(
?
:
c
r
i
p
t
|
t
y
l
e
)
|
t
i
t
l
e
|
x
m
l
)
[
^
>
]
*
+
>
#
i
'
,
 
'
'
,
 
$
d
a
t
a
)
;

 
 
 
 
}
 
w
h
i
l
e
 
(
$
o
l
d
_
d
a
t
a
 
!
=
=
 
$
d
a
t
a
)
;


 
 
 
 
/
/
 
w
e
 
a
r
e
 
d
o
n
e
.
.
.

 
 
 
 
r
e
t
u
r
n
 
$
d
a
t
a
;

}


/
*

A
n
 
o
u
t
p
u
t
 
f
i
l
t
e
r
.

*
/


f
u
n
c
t
i
o
n
 
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
s
t
r
i
n
g
)

{


/
*
 
	
L
e
f
t
 
i
n
-
s
i
t
u
 
f
o
r
 
n
o
w
,
 
a
s
 
x
s
s
 
c
l
e
a
n
 
b
l
o
c
k
s
 
x
s
s
 
t
h
r
e
a
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
 
u
s
e
r
s
 
m
a
y
 
w
a
n
t
 
t
o
 
r
e
f
e
r
 
t
o
 
a
n
d
/
o
r
 
u
s
e
 
o
u
r
 
p
r
e
v
i
o
u
s
 
f
i
l
t
e
r
i
n
g
.

 
 
 
 
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
 
"
&
#
3
4
;
"
,
 
'
&
l
d
q
u
o
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
 
"
&
#
3
8
;
"
,
 
"
&
"
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
 
"
&
#
3
9
;
"
,
 
"
&
#
9
6
;
"
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
 
"
&
#
6
0
;
x
&
#
6
2
;
"
,
 
"
"
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
 
/
/
 
O
l
d
e
r
 
v
e
r
s
i
o
n
s
 
o
f
 
J
o
m
r
e
s
 
u
s
e
d
 
t
o
 
a
d
d
 
<
x
>
 
t
o
 
s
t
r
i
n
g
s
 
t
o
 
m
a
k
e
 
t
h
e
m
 
s
a
f
e
.
 
W
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
h
a
t
 
a
n
y
 
m
o
r
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
f
 
w
e
 
d
o
n
'
t
 
a
d
d
 
t
h
i
s
 
l
i
n
e
 
t
h
e
n
 
s
o
m
e
 
o
l
d
e
r
 
i
n
s
t
a
l
l
a
t
i
o
n
s
 
m
a
y
 
s
h
o
w
 
<
x
>
 
i
n
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
,
 
t
h
e
 
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
.

 
 
 
 
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
 
"
&
#
6
0
;
"
,
 
"
<
"
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
 
"
&
#
6
2
;
"
,
 
"
>
"
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
 
"
&
l
t
;
"
,
 
"
<
"
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
 
"
&
g
t
;
"
,
 
"
>
"
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
 
*
/

 
 
 
 
$
s
t
r
i
n
g
 
=
 
x
s
s
_
c
l
e
a
n
(
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
"
\
x
e
2
\
x
8
0
\
x
a
8
"
,
 
'
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
 
/
/
 
S
t
r
i
p
 
o
u
t
 
s
o
m
e
 
n
a
u
g
h
t
y
 
l
i
t
t
l
e
 
a
s
c
i
i
 
l
i
n
e
 
s
e
p
e
r
a
t
o
r
s
 
t
h
a
t
 
a
r
e
 
a
b
s
o
l
u
t
e
 
d
e
v
i
l
s
 
t
o
 
r
e
m
o
v
e
 
i
f
 
y
o
u
'
r
e
 
n
o
t
 
l
o
o
k
i
n
g
 
f
o
r
 
t
h
e
m
.
 
T
h
e
y
'
l
l
 
b
r
e
a
k
 
y
o
u
r
 
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
.

 
 
 
 
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

